<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        Config::$isProduction = false; // Ganti ke true untuk production
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }


    public function paymentGateway($id_pemesanan)
    {
        // Ambil data pemesanan dari database berdasarkan id_pemesanan
        $pemesanan = PemesananTiket::find($id_pemesanan);

        if (!$pemesanan) {
            return abort(404, 'Data pemesanan tidak ditemukan.');
        }

        $order = PemesananTiket::find($id_pemesanan);
        if ($order) {
            dd($order->total_price); // Properti total_price akan berhasil diakses jika order ada
        } else {
            dd('Pemesanan tidak ditemukan'); // Jika tidak ada pemesanan
        }

        dd($id_pemesanan->total_price);

        // Konversikan ke integer
        $total_harga = intval($pemesanan->total_harga);

        // Debug nilai setelah konversi
        dd($total_harga);

        // Data transaksi untuk Midtrans
        $transaction_details = [
            'order_id' => $id_pemesanan,
            'gross_amount' => $pemesanan->total_harga,
        ];

        $customer_details = [
            'first_name' => $pemesanan->pendakian->users->name ?? 'Pengguna',
            $email = $pemesanan->pendakian->users->email ?? 'no-email@example.com',

        ];


        $item_details = [
            [
                'id' => 'ITEM-' . $id_pemesanan,
                'price' => $total_harga,
                'quantity' => 1,
                'name' => 'Tiket Pendakian',
            ],
        ];

        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        ];

        // Generate SnapToken dari Midtrans
        // try {
        //     // Dapatkan Snap Token dan redirect URL
        //     $snapToken = \Midtrans\Snap::createTransaction($transaction);

        //     if (!empty($snapToken->redirect_url)) {
        //         // Redirect pengguna langsung ke halaman pembayaran
        //         return redirect()->away($snapToken->redirect_url);
        //     } else {
        //         return redirect()->back()->with('error', 'Redirect URL tidak ditemukan.');
        //     }
        // } catch (\Exception $e) {
        //     // Jika terjadi kesalahan
        //     report($e);
        //     return abort(500, 'Terjadi kesalahan saat memproses pembayaran: ' . $e->getMessage());
        // }

        try {
            // Meminta Snap Token
            $snapToken = \Midtrans\Snap::getSnapToken($transaction);

            // Kembali ke view untuk menampilkan halaman pembayaran
            return view('ticket.pembayaran', [
                'snapToken' => $snapToken, // Snap Token untuk memproses pembayaran
                'order_id' => $id_pemesanan, // Menampilkan order_id
            ]);
        } catch (\Exception $e) {
            report($e);
            return abort(500, 'Terjadi kesalahan saat membuat Snap Token: ' . $e->getMessage());
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
}
