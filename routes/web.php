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
    return view('layouts/master');
});

Route::get('/kontakt', function () {
    return view('contact');
});

Route::get('/galeria', function () {
    return view('gallery');
});

Route::get('/cennik', function () {
    return view('prices');
});

Route::get('/najczesciej-zadawane-pytania', function () {
    return view('faq');
});

// Route::get('/pranie-wykladziny-odkurzaczem-pioracym', function () {
//     return view('articles/singlearticle');
// });