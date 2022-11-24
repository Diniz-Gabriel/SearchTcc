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
    return view('welcome');
});

Route::get('/99', function () {
    return view('99');
});

Route::get('/ck', function () {
    return view('ck');
});

Route::get('/rickmorty', function () {
    return view('rickmorty');
});

Route::get('/st', function () {
    return view('st');
});


Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
