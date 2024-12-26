<?php

namespace App\Http\Controllers;

use App\Models\Pendakian;
use App\Models\Pendaki;
use App\Models\PemesananTiket;
use App\Models\Gunung;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;





class TicketController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id();
        $gunungData = Gunung::all();

        // Mengirimkan data ke view
        return view('ticket.index', compact('userId', 'gunungData'));
    }

    public function store(Request $request)
    {
        // Get the logged-in user ID
        $userId = auth('web')->id();

        // Log the user ID (for debugging purposes)
        Log::debug('User ID:', [$userId]);

        // Validasi data
        $validated = $request->validate([
            'via' => 'required|exists:gunung,id_via',
            'date' => 'required|date',
            'gunung' => 'required|exists:gunung,nama_gunung',
            'f-name.*' => 'required|string|max:255',
            'l-name.*' => 'required|string|max:255',
            'email.*' => 'nullable|email|max:255',
            'no_telp.*' => 'required|string|max:15',
            'no_telp_darurat.*' => 'nullable|string|max:15',
            'Kewarganegaraan.*' => 'required|string|max:255',
            'identitas.*' => 'required|string|max:255',
            'no_identitas.*' => 'required|string|max:255',
            'alamat.*' => 'required|string|max:255',
        ]);

        $formattedDate = Carbon::createFromFormat('m/d/Y', $validated['date'])->format('Y-m-d');

        // Simpan Pendakian
        $pendakian = Pendakian::create([
            'id_via' => $validated['via'],
            'tanggal' => $formattedDate,
            'id_user' => $userId,
        ]);

        Log::debug('Pendakian Created:', [$pendakian]);

        // Simpan Pendaki
        foreach ($validated['f-name'] as $index => $namaLengkap) {
            $pendaki = Pendaki::create([
                'id_pendakian' => $pendakian->id_pendakian,
                'nama' => $namaLengkap . ' ' . $validated['l-name'][$index],
                'email' => $validated['email'][$index],
                'no_telp' => $validated['no_telp'][$index],
                'no_telepon_darurat' => $validated['no_telp_darurat'][$index],
                'kewarganegaraan' => $validated['Kewarganegaraan'][$index],
                'identitas' => $validated['identitas'][$index],
                'no_identitas' => $validated['no_identitas'][$index],
                'alamat' => $validated['alamat'][$index],
            ]);

            Log::debug('Pendaki Created:', [$pendaki]);
        }

        $nomorPemesanan = $this->generateNomorPemesanan();
        $jumlahPendaki = count($validated['f-name']);  // Berdasarkan banyaknya nama depan

        // Simpan Pemesanan Tiket
        $order =PemesananTiket::create([
            'id_via' => $validated['gunung'],
            'id_pendakian' => $pendakian->id_pendakian,
            'nomor_pemesanan' => $nomorPemesanan,
            'jumlah' => $jumlahPendaki,
        ]);

        return redirect()->route('ticket.order', ['order_id' => $order->id_pemesanan]);
    }


    public function show($id)
    {
        // Ambil pemesanan berdasarkan id dan load relasi pendakian serta pendaki
        $pemesanan = PemesananTiket::with(['pendakian.pendaki'])->findOrFail($id);

        // Log untuk debugging view
        Log::debug('Pemesanan Data:', $pemesanan->toArray());

        return view('tickets.pemesanan', compact('pemesanan'));
    }

    private function generateNomorPemesanan()
    {
        do {
            $timestamp = now()->format('YmdHis'); // Format tanggal dan waktu
            $randomString = Str::upper(Str::random(6)); // Kombinasi acak 6 karakter
            $nomorPemesanan = 'PN' . $timestamp . $randomString; // Contoh: PN20241215153000ABC123

            // Cek apakah nomor pemesanan sudah ada di database
            $exists = PemesananTiket::where('nomor_pemesanan', $nomorPemesanan)->exists();
        } while ($exists); // Ulangi hingga menemukan nomor pemesanan yang unik

        return $nomorPemesanan;
    }

    public function pemesanan($id)
    {
        // Mengambil data pemesanan dan pendaki berdasarkan id
        $pendakian = Pendakian::findOrFail($id);
        $pendaki = Pendaki::where('id_pendakian', $pendakian->id_pendakian)->get();
        $gunung = Gunung::find($pendakian->id_via);

        // Kirim data ke view pemesanan
        return view('ticket.pemesanan', compact('pendakian', 'pendaki', 'gunung'));
    }

    public function showOrder($order_id)
    {
        try {
            // Log awal
            Log::info('Memulai showOrder', ['order_id' => $order_id]);

            // Ambil data PemesananTiket
            $order = PemesananTiket::with(['pendakian.gunung'])
                ->findOrFail($order_id);
            Log::info('Order ditemukan', ['order' => $order]);

            // Ambil data pengguna
            $user = User::findOrFail($order->pendakian->id_user);
            Log::info('Pengguna ditemukan', ['user' => $user]);

            // Ambil data destinasi dan jalur
            $destination = $order->pendakian->gunung->nama_gunung;
            $trail = $order->pendakian->gunung->nama_via;
            Log::info('Data destinasi dan jalur ditemukan', ['destination' => $destination, 'trail' => $trail]);

            // Ambil tanggal pendakian
            $date = $order->pendakian->tanggal;
            Log::info('Tanggal pendakian ditemukan', ['date' => $date]);

            // Hitung total harga
            $ticket_price = $order->pendakian->gunung->harga_tiket;
            $nomor_pemesanan = $order->nomor_pemesanan;
            $id_pendakian = $order->pendakian->id_pendakian;
            Log:info('Nomor tiket ditemukan', ['nomor_pemesanan' => $nomor_pemesanan]);
            $total_price = $ticket_price * $order->pendakian->jumlah;
            Log::info('Total harga dihitung', ['ticket_price' => $ticket_price, 'total_price' => $total_price]);

            // Kirim data ke view
            return view('ticket.show', compact('order', 'user', 'destination', 'trail', 'date', 'total_price', 'nomor_pemesanan', 'id_pendakian'));
        } catch (\Exception $e) {
            // Log error dan kembalikan respon dengan pesan error
            Log::error('Terjadi kesalahan pada showOrder', [
                'error_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);

            return response()->view('errors.general', ['message' => 'Terjadi kesalahan'], 500);
        }
    }





}
