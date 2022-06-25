<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CommentController;

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
    Route::get('/news', [NewsController::class, 'index'])->name('show_news');
    Route::get('/news/create', [NewsController::class, 'create']);
    Route::post('/news', [NewsController::class, 'store']);
    Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');;
    Route::get('/news/team/{teamName}', [NewsController::class, 'getNewsByTeam'])->name('newsForTeam');

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


