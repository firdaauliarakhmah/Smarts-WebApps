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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/beasiswa', function () {
    return view('beasiswa', [
        "title" => "Beasiswa"
    ]);
});

Route::get('/tips', function () {
    return view('tips', [
        "title" => "Tips"
    ]);
});

// tambahan 3 jun
Route::get('/tips2', function () {
    return view('tips2', [
        "title" => "Tips2"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita"
    ]);
});

// tambahan 3 jun
Route::get('/berita2', function () {
    return view('berita2', [
        "title" => "Berita2"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

//hasil input
Route::get('/hasil', function () {
    return view('hasil', [
        "title" => "hasil"
    ]);
});


//ini tambahan 24 may 2023
//untuk menu home --> selanjutnya to u open more information
Route::get('/readmore1', function () {
    return view('readmore1', [
        "title" => "readmore1"
    ]);
});

//untuk menu beasiswa impl spk
Route::get('/readmore2', function () {
    return view('readmore2', [
        "title" => "readmore2"
    ]);
});

//ini tambahan 29 - 30 may 2023 
//untuk menu tips --> rekomendasi 1
Route::get('/superior1', function () {
    return view('superior1', [
        "title" => "/superior1"
    ]);
});

//tips --> rekomendasi 2
Route::get('/superior2', function () {
    return view('superior2', [
        "title" => "/superior2"
    ]);
});

//tips --> rekomendasi 3
Route::get('/superior3', function () {
    return view('superior3', [
        "title" => "/superior3"
    ]);
});

//tips --> rekomendasi 4
Route::get('/superior4', function () {
    return view('superior4', [
        "title" => "/superior4"
    ]);
});

//tips --> rekomendasi 5
Route::get('/superior5', function () {
    return view('superior5', [
        "title" => "/superior5"
    ]);
});

//tips --> rekomendasi 6
Route::get('/superior6', function () {
    return view('superior6', [
        "title" => "/superior6"
    ]);
});

//tips --> rekomendasi 7
Route::get('/superior7', function () {
    return view('superior7', [
        "title" => "/superior7"
    ]);
});

//tips --> rekomendasi 8
Route::get('/superior8', function () {
    return view('superior8', [
        "title" => "/superior8"
    ]);
});

//tips --> rekomendasi 9
Route::get('/superior9', function () {
    return view('superior9', [
        "title" => "/superior9"
    ]);
});

// tips --> rekomendasi 10 + 3jun
Route::get('/superior10', function () {
    return view('superior10', [
        "title" => "/superior10"
    ]);
});

// tips --> rekomendasi 11 + 3jun
Route::get('/superior11', function () {
    return view('superior11', [
        "title" => "/superior11"
    ]);
});

// tips --> rekomendasi 12 + 3jun
Route::get('/superior12', function () {
    return view('superior12', [
        "title" => "/superior12"
    ]);
});

//daftar
Route::get('/daftar', function () {
    return view('daftar', [
        "title" => "/daftar"
    ]);
});

//spk saw
use App\Http\Controllers\SpkController;
Route::controller(SpkController::class)->group(function() {
    Route::post('spk/store', 'storeSpk');
    Route::get('spk/test', 'test');
    Route::get('test/hasil', 'hasil');

});

// add siswa
use App\Http\Controllers\SiswaController;
Route::controller(SiswaController::class)->group(function(){
    Route::get('siswa/dashboard', 'dashboard');
    Route::get('siswa/', 'index');
    Route::get('siswa/add', 'add');
    Route::post('siswa/store', 'store');
    Route::get('siswa/delete/{id}','delete');
    Route::get('siswa/edit/{id}', 'edit');
    Route::post('siswa/update/{id}','update');
});

// add admin
use App\Http\Controllers\AdminController;
Route::controller(AdminController::class)->group(function() {
    Route::get('user/', 'index');
    Route::get('user/add', 'add');
    Route::post('user/store', 'store');
    Route::get('user/edit/{id}', 'edit');
    Route::post('user/update/{id}', 'update');
    Route::get('user/delete/{id}', 'delete');
});

// kriteria
use App\Http\Controllers\KriteriaController;
Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
});

//login
use App\Http\Controllers\LoginController;
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');

//chatbot
use App\Http\Controllers\BotManController;
Route::get('/welcome', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/botman', [BotManController::class,'handle']);