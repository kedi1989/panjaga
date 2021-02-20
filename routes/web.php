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
})->name('home');

Route::get('/kontakt', function () {
    return view('contact');
})->name('kontakt');

Route::get('/galeria', function () {
    return view('gallery');
})->name('realizacje');

Route::get('/cennik', function () {
    return view('prices');
})->name('cennik');

Route::get('/o-nas', function () {
    return view('aboutus');
})->name('o-nas');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/najczesciej-zadawane-pytania', function () {
    return view('faq');
})->name('faq');

Route::get('oferta/pranie-tapicerki-samochodowej', function () {
    return view('offers/pranieTapicerkiSamochodowejOffer');
})->name('pranie-tapicerki-samochodowej');

Route::get('oferta/pranie-tapicerki-meblowej', function () {
    return view('offers/pranieTapicerkiMeblowejOffer');
})->name('pranie-tapicerki-meblowej');

Route::get('oferta/pranie-wykladzin-i-dywanow', function () {
    return view('offers/pranieDywanowWykladzinOffer');
})->name('pranie-dywanow-wykladzin');

Route::get('blog/jak-prac-tapicerke-meblowa', function () {
    return view('articles/article_1');
})->name('article_1');

// Route::get('blog/jak-prac-materac', function () {
//     return view('articles/article_2');
// })->name('article_2');

Route::get('blog/jak-prac-tapicerke-samochodowa', function () {
    return view('articles/article_3');
})->name('article_3');

// Route::get('blog/usuwanie-plam', function () {
//     return view('articles/article_4');
// })->name('article_4');

// Route::get('blog/czyszczenie-wozka-dzieciecego', function () {
//     return view('articles/article_5');
// })->name('article_5');

// Route::get('blog/pranie-dywanow-i-wykladzin', function () {
//     return view('articles/article_6');
// })->name('article_6');