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

// --> ROUTE APP <--
Route::middleware('auth')->group(function () {
    Route::get('/admin-home', function () {
        return view('app.admin-home');
    });
});





