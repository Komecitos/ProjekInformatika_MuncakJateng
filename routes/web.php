<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailController;
// use App\Http\Requests\EmailVerificationRequest;
// use Illuminate\Auth\Events\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Notifications\WelcomeEmail;
use App\Notifications\EmailVerifiedPushNotification;


// $request->user()->markEmailAsVerified();
// $request->user()->notify(new WelcomeEmail());

// $request->user()->markEmailAsVerified();
// $request->user()->notify(new EmailVerifiedPushNotification());



Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('welcome');
})->name('logout');

Route::middleware('auth')->get('/home', [HomeController::class, 'index'])->name('home');

// Halaman register
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::post('register', [RegisterController::class, 'register']);

// email verification
Route::get('email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Auth::routes(['verify' => true]);


Route::get('/email/verify/{id}/{hash}', function (Request $request) {
    if ($request->user()->hasVerifiedEmail()) {
        return redirect('/home');  // Jika email sudah diverifikasi, arahkan ke halaman home.
    }

    $request->user()->markEmailAsVerified();  

    $request->user()->markEmailAsVerified();
    $request->user()->notify(new WelcomeEmail());

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/send-email', [EmailController::class, 'sendEmail']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');


// Route::get('/send-email', function () {
//     $to = 'email_tujuan@example.com';
//     $subject = 'Test Email';
//     $message = 'This is a test email sent from sendmail!';
//     $headers = 'From: noreply@yourdomain.com' . "\r\n" .
//         'X-Mailer: PHP/' . phpversion();

//     if (mail($to, $subject, $message, $headers)) {
//         return "Email successfully sent!";
//     } else {
//         return "Failed to send email.";
//     }
// });

