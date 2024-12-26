<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Models\User;  // Pastikan model User sudah ada

class EmailController extends Controller
{
    // Fungsi untuk mengirim email
    public function sendEmail()
    {
        // Ambil user dengan ID 1 (atau sesuaikan dengan user yang ingin dikirimi email)
        $user = User::find(1);

        if ($user) {
            // Kirim email ke user yang ditemukan
            Mail::to($user->email)->send(new TestEmail($user));

            return "Email sent successfully!";
        }

        return "User not found!";
    }
}
