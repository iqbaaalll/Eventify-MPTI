<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KategoriController;

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
Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::get('/jenisEvent', function () {
    return view('jenisEvent');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/favorit', function () {
    return view('favorit');
});

Route::get('/eventPrivate', [EventController::class, 'index']);
Route::post('/event', [EventController::class, 'store']);

Route::get('/', [EventController::class, 'getAll']);
Route::get('/event/{event:id}', [EventController::class, 'showOne']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
