<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Pembayaran; // Import model Pembayaran
use App\Models\Pendakian;  // Import model Pendakian untuk validasi id_pendakian
use App\Models\PemesananTiket;
use Midtrans\Transaction;


class PaymentController extends Controller
{
    public function __construct()
    {
        // Setup Midtrans configuration
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = false; 
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }


    public function paymentGateway(Request $request)
    {
        // Validasi data dari POST
        $validated = $request->validate([
            'id_pemesanan' => 'required|exists:pemesanan_tiket,id_pemesanan',
            'total_price' => 'required|numeric',
            'name' => 'required|string',
            'email' => 'required|email',
            'destination' => 'required|string',
            'trail' => 'required|string',
            'date' => 'required|date',
            'id_pendakian' => 'required|exists:pendakian,id_pendakian',
        ]);


        // Data transaksi dari form POST
        $transaction_details = [
            'order_id' => $validated['id_pemesanan'],
            'gross_amount' => $validated['total_price'],
        ];

        $customer_details = [
            'first_name' => $validated['name'],
            'email' => $validated['email'],
        ];

        $item_details = [
            [
                'id' => 'ITEM-' . $validated['id_pemesanan'],
                'price' => $validated['total_price'],
                'quantity' => 1,
                'name' => 'Tiket Pendakian',
            ],
        ];

        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        ];

        try {
            // Meminta Snap Token dari Midtrans
            $snapToken = \Midtrans\Snap::getSnapToken($transaction);

            // Kembali ke view untuk menampilkan halaman pembayaran
            return view('ticket.pembayaran', [
                'snapToken' => $snapToken,
                'order_id' => $validated['id_pemesanan'],
                'id_pendakian' => $validated['id_pendakian'],
                'total_price' => $validated['total_price'],
            ]);
        } catch (\Exception $e) {
            Log::error('Midtrans Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat membuat pembayaran. Silakan coba lagi.');
        }
    }

    public function notificationHandler(Request $request)
    {
        $notification = json_decode($request->getContent(), true);

        $transactionStatus = $notification['transaction_status'];
        $orderId = $notification['order_id'];
        $id_pemesanan = explode('-', $orderId)[2] ?? null;

        if (!$id_pemesanan) {
            return response()->json(['error' => 'ID Pemesanan tidak valid'], 400);
        }

        // Ambil data pemesanan
        $pemesanan = PemesananTiket::find($id_pemesanan);
        if (!$pemesanan) {
            return response()->json(['error' => 'Pemesanan tidak ditemukan'], 404);
        }

        // Simpan data ke tabel pembayaran jika sukses
        if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
            Pembayaran::create([
                'id_pemesanan' => $id_pemesanan,
                'metode' => $notification['payment_type'],
                'total_pembayaran' => $pemesanan->total_harga,
                'status' => 'paid',
            ]);
        }

        return response()->json(['message' => 'Notifikasi diproses']);
    }

    public function webhookHandler(Request $request)
    {
        // Cek bahwa ini adalah request yang datang dari Midtrans
        $notification = $request->all();

        // Pastikan Anda menangani sesuai dengan webhook signature yang dikirimkan oleh Midtrans untuk keamanan
        $transaction_status = $notification['transaction_status'];
        $order_id = $notification['order_id'];
        $transaction_id = $notification['transaction_id'];

        // Cari pemesanan berdasarkan order_id
        $pemesanan = PemesananTiket::where('order_id', $order_id)->first();

        if ($pemesanan) {
            if ($transaction_status == 'capture' || $transaction_status == 'settlement') {
                // Jika status pembayaran berhasil
                $pemesanan->status_pembayaran = 'sudah_bayar'; // Pembayaran berhasil
                $pemesanan->transaction_id = $transaction_id;  // Set ID transaksi
                $pemesanan->save();

                // Kirim response ke Midtrans
                return response()->json(['status' => 'success'], 200);
            } elseif ($transaction_status == 'pending') {
                // Jika status pembayaran menunggu konfirmasi
                $pemesanan->status_pembayaran = 'pending';
                $pemesanan->save();
                return response()->json(['status' => 'pending'], 200);
            } else {
                // Jika gagal atau ada kesalahan dalam pembayaran
                $pemesanan->status_pembayaran = 'failed';
                $pemesanan->save();
                return response()->json(['status' => 'failed'], 200);
            }
        }

        // Jika pemesanan tidak ditemukan
        return response()->json(['status' => 'failed'], 404);
    }

    public function success(Request $request)
    {
        // Mendapatkan snap_token dan order_id dari request
        $snapToken = $request->input('snap_token');
        $orderId = $request->input('order_id');
        $idPendakian = $request->input('id_pendakian'); // Pastikan id_pendakian dikirimkan dalam form request
        $total_price = $request->input('total_price');

        // Pastikan data yang diperlukan ada
        if (empty($snapToken) || empty($orderId) || empty($idPendakian)) {
            // Catat pesan kesalahan ke log
            Log::error('Data yang diperlukan tidak lengkap', [
                'snap_token' => $snapToken,
                'order_id' => $orderId,
                'id_pendakian' => $idPendakian,
                'total_price' => $total_price,
            ]);

            // Tindak lanjut: Misalnya redirect dengan error flash
            return view('error')->with('error', 'Data yang diperlukan tidak lengkap');
        }


        // Status pembayaran berdasarkan token atau hasil dari API Midtrans
        if ($snapToken == 'AUTO_CONFIRMED') {
            $status = 'success';
            $message = 'Pembayaran diterima secara otomatis.';
        } else {
            $status = 'pending'; // Status lain tergantung hasil dari API Midtrans
            $message = 'Pembayaran masih diproses atau memerlukan konfirmasi.';
        }

        // Menyimpan data transaksi ke dalam tabel pembayaran_tiket
        Pembayaran::create([
            'order_id' => $orderId,
            'snap_token' => $snapToken,
            'status' => $status,
            'amount' => $request->input('total_price'), // Ambil jumlah dari parameter atau logika
            'payment_method' => $request->input('payment_method'), // Ambil payment method
            'response' => json_encode($request->all()), // Menyimpan semua data respons yang dikirimkan
            'id_pendakian' => $idPendakian, // Foreign key ke tabel pendakian
        ]);

        // Tampilkan halaman notifikasi pembayaran atau informasi lebih lanjut
        return view('ticket.paymentNotif', compact('orderId', 'status', 'message', 'idPendakian'));
    }
}
