<?php

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

// INDEX
Route::get('/', function () {
    return view('Landingpage.home');
});
Route::get('/home', function () {
    return view('Landingpage.home');
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