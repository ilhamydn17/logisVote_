<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
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
    Route::get('/admin-home', [UserController::class, 'adminHome'])->name('admin.home');
    Route::get('user-home',[UserController::class,'userHome'])->name('user.home');
    Route::get('user/{candidate}/vote', [VoteController::class, 'doVote'])->name('user.vote');
});

Route::get('/', function () {
    return view('app.landing-page');
});







