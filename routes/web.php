<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteSessionController;

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
    // USER
    Route::get('user-home',[UserController::class,'userHome'])->name('user.home');
    Route::get('user/{candidate}/vote', [VoteController::class, 'doVote'])->name('user.vote');

    // ADMIN
    Route::get('/admin-home', [UserController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin-candidates', [UserController::class, 'adminCandidate'])->name('admin.candidate');
    Route::get('/admin-vote-session', [UserController::class, 'adminListSession'])->name('admin.list-session');
    Route::get('admin/{id}/candidate', [CandidateController::class, 'show'])->name('admin.detail-candidate');
    Route::put('admin/{candidate}/candidate', [CandidateController::class, 'update'])->name('admin.detail-candidate-update');
    Route::get('admin/charts', [VoteController::class, 'chart'])->name('admin.chart');
    Route::get('admin/get-data-chart', [VoteController::class, 'getDataChart'])->name('admin.getDataChart');
    Route::get('admin/list-users', [UserController::class, 'listUsers'])->name('admin.list-users');
    Route::resource('/vote-session', VoteSessionController::class);
    Route::post('admin/{voteSession}/action', [VoteSessionController::class, 'adminAction'])->name('admin.action');
    Route::post('admin/import-users', [UserController::class, 'importUsers'])->name('admin.import-users');
    Route::post('admin/add-users', [UserController::class, 'storeUser'])->name('admin.add-users');
});

Route::post('/img-upload',[VoteSessionController::class, 'imgUpload']);

Route::get('/', function () {
    return view('app.landing-page');
});







