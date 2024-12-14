<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfEmailNotVerified
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and hasn't verified their email
        if (Auth::check() && !Auth::user()->hasVerifiedEmail()) {
            // Redirect to the verification notice page
            return redirect()->route('verification.notice');
        }

        // Allow request to proceed if email is verified
        return $next($request);
    }
}
