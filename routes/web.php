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
    echo "Selamat Datang"; 
});

Route::get('about', function () { 
    echo "NIM &nbsp; : 2031710171<br>";
    echo "Nama : Firdha Arga Putriani"; 
});

Route::get('articles/{id}', function ($id) { 
    return 'Halaman Artikel dengan ID '. $id;
});

// Firdha Arga Putriani 
// MI 2E 
// 12