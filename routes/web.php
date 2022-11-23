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

// ini berguna untuk membuat rute, agar dihandle saat memasukkan alamat path berdasarkan fungsi
Route::get('/', function () { 
    // return view('welcome');
    return view('home');
});

Route::get('/about', function () { 
    // return view('welcome');
    return view('about', [
        "name" => "Quenie Salbiyah",
        "email" => "Quenie@gmail.com"
    ]);
});

Route::get('/blog', function () { 
    // return view('welcome');
    return view('posts');
});
