<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('logis_vote.landing-page');
});

Route::middleware(['auth'])->group(function () {
    // ...
    /* setelah user berhasil login, maka otomatis dalah halaman selanjutnya setelah login, akan dapat *  *  mengakses sebuah variabel yang berisi data user yang sedang login, yaitu auth()->user()
    */
    Route::get('/dashboard', function () {
        $user = auth()->user();
        return view('logis_vote.home',compact('user'));
    });
});


Route::get('tes', function () {
    return view('mazer.index');
});



