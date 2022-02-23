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
    echo "Sealamat Datang";
});

Route::get('/about', function () {
    echo "2041720094, Safira Dyah Satiti, TI-2D";
});

Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID {id}";
});

Route::get('/articles/{id}', function ($id) {
    echo "Ini merupakan halaman artikel dengan id $id";
});


