<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

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

Route::group(['middleware'=> 'verified'], function(){
    Route::get('/', [TeamController::class, 'index']);
    Route::get('/team/{id}', [TeamController::class, 'show']);
    Route::get('/player/{id}', [PlayerController::class, 'show']);
    Route::post('/team/{team}/comments', [CommentController::class, 'store'])->name('createComment');
});

Route::group([
    'middleware' => 'auth'
], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/email/verify', [AuthController::class, 'getEmailVerificationNotice'])->name('verification.notice');
    Route::get('/verify/{id}', [UserController::class, 'store']);
});




Route::group(['middleware'=> 'guest'], function () {

    // register
Route::get('/register', [AuthController::class, 'getRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

//login
Route::get('/login', [AuthController::class, 'getLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

});


