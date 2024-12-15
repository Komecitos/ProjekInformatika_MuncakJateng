<?php

namespace App\Http\Controllers;

use App\Models\Gunung;

use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function show($mount)
    {
        $validMountains = ['semeru', 'merbabu', 'rinjani', 'lawu', 'prau'];

        if (!in_array(strtolower($mount), $validMountains)) {
            // abort(404, 'Gunung tidak ditemukan.');
            echo "Gunung tidak ditemukan.";
        }

        return view('mounts.' . $mount);
    }

    public function getViaByGunung($gunungId)
    {
        // Mengambil data via berdasarkan ID gunung yang dipilih
        $jalur = Gunung::where('id_gunung', $gunungId)->get(['id_via', 'nama_via']);

        // Mengembalikan data dalam format JSON
        return response()->json($jalur);
    }
}
