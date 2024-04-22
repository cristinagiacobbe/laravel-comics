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


    $comics = config('data.products');
    $banners = config('data_banners.banners');

    return view('welcome', compact('comics', 'banners'));
});

Route::get('/single', function () {
    $comics = config('data.products');
    return view('single', compact('comics'));
})->name('single');
