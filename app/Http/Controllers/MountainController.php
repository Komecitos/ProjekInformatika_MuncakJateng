<?php

namespace App\Http\Controllers;

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
}
