<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RedirectIfEmailNotVerified
{
    public function handle(Registered $event)
    {
        // Jika pengguna belum verifikasi, arahkan ke halaman verifikasi
        if (!$event->user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice');
        }
    }
}
