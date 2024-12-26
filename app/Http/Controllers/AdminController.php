<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\PemesananTiket;
use App\Models\Pendakian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function index()
    {
        $data = Pendakian::all(); // Ambil semua data pendakian dari database
        return view('admin.index', ['pendakian' => $data]);
    }

    public function cariPendakian($id_tiket)
    {
        // 1. Ambil data order berdasarkan 'order_id'
        $order = Pembayaran::where('order_id', $id_tiket)->first();

        // Periksa jika $order tidak null
        if (!$order) {
            Log::error('Order ID tidak ditemukan', ['id_tiket' => $id_tiket]);
            return redirect()->back()->with('error', 'ID Tiket tidak ditemukan');
        }

        // 2. Ambil id_pemesanan dari tabel PemesananTiket yang sesuai
        $id_pemesanan = PemesananTiket::where('id_pemesanan', $order->id_pemesanan)->first();

        // Periksa jika $id_pemesanan tidak null
        if (!$id_pemesanan) {
            Log::error('ID Pemesanan tidak ditemukan', ['order_id' => $order->id_pemesanan]);
            return redirect()->back()->with('error', 'Data Pemesanan tidak ditemukan');
        }

        // 3. Ambil id_pendakian dari tabel Pendakian berdasarkan id_pemesanan
        $id_pendakian = DB::table('pendakian')
            ->where('id_pemesanan', $id_pemesanan->id_pemesanan)
            ->first();

        // Periksa jika $id_pendakian tidak null
        if (!$id_pendakian) {
            Log::error('ID Pendakian tidak ditemukan', ['id_pemesanan' => $id_pemesanan->id_pemesanan]);
            return redirect()->back()->with('error', 'Data Pendakian tidak ditemukan');
        }

        // Logging untuk debugging
        Log::info('Nilai id_tiket yang diterima:', ['id_tiket' => $id_tiket]);
        Log::info('Nilai order_id yang ditemukan:', ['order_id' => $order->id_pemesanan]);
        Log::info('Nilai pemesanan_tiket.id_pemesanan:', ['id_pemesanan' => $id_pemesanan->id_pemesanan]);
        Log::info('Nilai pendakian.id_pendakian:', ['id_pendakian' => $id_pendakian->id_pendakian]);

        // 4. Kirim data id_pendakian ke view
        return view('admin.index', ['pendakian' => $id_pendakian]);
    }
}
