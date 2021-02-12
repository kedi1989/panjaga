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
    return view('mainpage');
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

Route::get('/o-nas', function () {
    return view('aboutus');
});

Route::get('/najczesciej-zadawane-pytania', function () {
    return view('faq');
});

Route::get('oferta/pranie-tapicerki-samochodowej', function () {
    return view('offers/pranieTapicerkiSamochodowejOffer');
})->name('pranie-tapicerki-samochodowej');

Route::get('oferta/pranie-tapicerki-meblowej', function () {
    return view('offers/pranieTapicerkiMeblowejOffer');
})->name('pranie-tapicerki-meblowej');

Route::get('oferta/pranie-wykladzin-i-dywanow', function () {
    return view('offers/pranieDywanowWykladzinOffer');
})->name('pranie-dywanow-wykladzin');

// Route::get('/pranie-wykladziny-odkurzaczem-pioracym', function () {
//     return view('articles/singlearticle');
// });

// Route::get('/offer', function () {
//     return view('articles/singleoffer');
// });