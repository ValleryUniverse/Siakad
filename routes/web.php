<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
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


// --------- Instruktur --------
Route::get('/dashboard_instruktur', function () {
    return view('Instruktur.dashboard_instruktur');
});
Route::get('/form_sekolah', function () {
    return view('Instruktur.form_sekolah');
});
Route::get('/form_kelas', function () {
    return view('Instruktur.form_kelas');
});