<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Notifications\WelcomeEmail;
use App\Notifications\EmailVerifiedPushNotification;
use App\Http\Controllers\MountainController;



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

Route::get('/ticket', [TicketController::class, 'index'])->name('ticket.index');

Route::get('/gunung/{mount}', [MountainController::class, 'show'])->name('mount.show');

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
