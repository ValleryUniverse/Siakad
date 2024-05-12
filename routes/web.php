<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\instrukturController;
use App\Http\Controllers\sekolahController;
use App\Http\Controllers\nilai_raportController;
use App\Http\Controllers\DashboardController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'index'])->name('auth.loginIndex');
Route::get('/register', [AuthController::class, 'registerIndex'])->name('auth.regisIndex');
Route::post('/login/proses', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register/proses', [AuthController::class, 'register'])->name('auth.register');

// INDEX
Route::get('/', function () {
    return view('Landingpage.home');
});
Route::get('/home', function () {
    return view('Landingpage.home');
});
// ------- Admin ------//
Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/sekolah', function () {
    return view('backend.index');
});

// Route::resource('/siswa', siswaController::class);
// Route::resource('/sekolah', sekolahController::class);
// Route::resource('/instruktur', instrukturController::class);
// Route::resource('/nilai_raport', nilai_raportController::class);

Route::get('/profile', function () {
    return view('backend.profile');
});
Route::get('/contact', function () {
    return view('backend.contact');
});