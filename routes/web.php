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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

// Route::get('/home', [HomeController::class, 'index']);
/// baris atas ini dijadikan comments
/// baris bawah ini ditambahkan:
Route::get('/home', function () {
    return view('home');
});

