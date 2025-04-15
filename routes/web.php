<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\MusicianAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\UserController;
// Home
Route::get('/', fn() => view('home'))->name('home');

// Selection pages (newly added)
Route::get('/musician', fn() => view('select.musician'))->name('musician.select');
Route::get('/user', fn() => view('select.user'))->name('user.select');

// Musician Authentication
Route::get('/musician/login', [MusicianAuthController::class, 'showLoginForm'])->name('musician.login');
Route::post('/musician/login', [MusicianAuthController::class, 'login']);
Route::get('/musician/register', [MusicianAuthController::class, 'showRegisterForm'])->name('musician.register');
Route::post('/musician/register', [MusicianAuthController::class, 'register']);

// User Authentication
Route::get('/user/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [UserAuthController::class, 'login']);
Route::get('/user/register', [UserAuthController::class, 'showRegisterForm'])->name('user.register');
Route::post('/user/register', [UserAuthController::class, 'register']);

// Logout Route
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Musician Dashboard (requires auth + musician role)
Route::middleware(['auth', 'role:musician'])->group(function () {
    Route::get('/musician/dashboard', fn() => view('dashboard.musician_dashboard'))->name('musician.dashboard');
});

// User Dashboard (requires auth + user role)
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', fn() => view('dashboard.user_dashboard'))->name('user.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/musicians', [UserController::class, 'showAllMusicians'])->name('user.musicians');
    Route::post('/book-event/{showId}', [UserController::class, 'bookEvent'])->name('user.bookEvent');
});
