<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
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
    return view('index');
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/detail/{id}', [PostController::class, 'detail']);

Route::middleware('checkUser')->group(function () {
    Route::get('/blog/create', [PostController::class, 'create']);
    Route::post('/blog/create', [PostController::class, 'store']);
});

Route::get('/register', [AccountController::class, 'register']);
Route::post('/register', [AccountController::class, 'signup']);
Route::get('/login', [AccountController::class, 'login']);
Route::post('/login', [AccountController::class, 'signin']);
Route::get('/logout', [AccountController::class, 'logout']);
