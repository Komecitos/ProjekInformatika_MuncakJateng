<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;


use App\Models\Gunung;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Notifications\WelcomeEmail;
use App\Notifications\EmailVerifiedPushNotification;
use App\Http\Controllers\MountainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/gunung/{mount}', [MountainController::class, 'show'])->name('mount.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::post('login', [LoginController::class, 'login']);

Route::get('/email', [EmailController::class, 'show']);

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
        return redirect('/home');
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

// weatherApi
Route::get('/weather/current/{location}', [WeatherController::class, 'getCurrentWeather']);
Route::get('/weather/forecast/{location}', [WeatherController::class, 'getForecast']);
Route::get('/weather/mountain', [WeatherController::class, 'getWeatherLawu'])->name('weather.mountain');

// OpenWeather API
Route::get('/weather/mountain/{latitude}/{longitude}/{location}', [WeatherController::class, 'getWeather'])->name('openWeather');


Route::get('/ticket', [TicketController::class, 'index'])->name('ticket.index');
Route::get('/ticket/pemesanan/{id}', [TicketController::class, 'pemesanan'])->name('ticket.pemesanan');
Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');
Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('ticket.show');

Route::get('/tickets/order/{order_id}', [TicketController::class, 'showOrder'])->name('ticket.order');
Route::post('/payment/create', [PaymentController::class, 'createTransaction'])->name('payment.create');

// Route untuk menangani callback notifikasi dari Midtrans
Route::post('/payment/notification', [PaymentController::class, 'notificationHandler'])->name('payment.notification');
Route::post('/payment/gateway', [PaymentController::class, 'paymentGateway'])->name('payment.gateway');
Route::post('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::post('/midtrans-webhook', [PaymentController::class, 'webhookHandler']);


Route::get('/gunung', function () {
    $gunungData = Gunung::all();  // Mengambil semua gunung
    return view('yourView', compact('gunungData'));
});

// Rute untuk mengambil jalur via berdasarkan nama_gunung
Route::get('/gunung/{nama_gunung}/jalur', function ($nama_gunung) {
    // Mengambil data via berdasarkan nama_gunung
    $vias = Gunung::where('nama_gunung', $nama_gunung)->get(['id_via', 'nama_via']);

    // Mengembalikan data via yang terkait dengan nama_gunung
    return response()->json($vias);
});

// admin
Route::get('/admin/pendakian', [AdminController::class, 'index'])->name('admin.index');

use App\Http\Controllers\PendakianController;

Route::get('/cari-pendakian/{id_tiket}', [AdminController::class, 'cariPendakian'])
    ->name('cari-pendakian');