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

Route::get('/case-study', function () {
    return view('casestudy');
})->name('casestudy');

Route::get('/najczesciej-zadawane-pytania', function () {
    return view('faq');
})->name('faq');

Route::get('/oferta', function () {
    return view('offer');
})->name('offer');

Route::get('oferta/pranie-tapicerki-samochodowej', function () {
    return view('offers/pranieTapicerkiSamochodowejOffer');
})->name('pranie-tapicerki-samochodowej');

Route::get('oferta/pranie-tapicerki-meblowej', function () {
    return view('offers/pranieTapicerkiMeblowejOffer');
})->name('pranie-tapicerki-meblowej');

Route::get('oferta/pranie-wykladzin-i-dywanow', function () {
    return view('offers/pranieDywanowWykladzinOffer');
})->name('pranie-dywanow-wykladzin');

Route::get('oferta/pranie-i-czyszczenie-wozkow-dzieciecych', function () {
    return view('offers/pranieWozkowOffer');
})->name('pranie-i-czyszczenie-wozkow-dzieciecych');

Route::get('oferta/pranie-i-dezynfekcja-materacy', function () {
    return view('offers/pranieMateracyOffer');
})->name('pranie-materacy');

Route::get('blog/jak-prac-tapicerke-meblowa', function () {
    return view('articles/article_1');
})->name('article_1');

Route::get('blog/jak-prac-materac', function () {
    return view('articles/article_2');
})->name('article_2');

Route::get('blog/jak-prac-tapicerke-samochodowa', function () {
    return view('articles/article_3');
})->name('article_3');

// Route::get('blog/usuwanie-plam', function () {
//     return view('articles/article_4');
// })->name('article_4');

// Route::get('blog/czyszczenie-wozka-dzieciecego', function () {
//     return view('articles/article_5');
// })->name('article_5');

Route::get('blog/pranie-dywanow-i-wykladzin', function () {
    return view('articles/article_6');
})->name('article_6');

Route::get('blog/pranie-i-czyszczenie-karcher-pogromcy-mitow', function () {
    return view('articles/article_7');
})->name('article_7');

Route::get('blog/pranie-mebli-dywanow-i-wykladzin-karcher-leszno', function () {
    return view('articles/article_8');
})->name('article_8');

Route::get('blog/pranie-tapicerki-srem', function () {
    return view('articles/article_9');
})->name('article_9');

Route::get('blog/pranie-tapicerki-czyszczenie-mebli-koscian', function () {
    return view('articles/article_10');
})->name('article_10');

Route::get('blog/pranie-tapicerki-czyszczenie-mebli-foteli-samochodowych-mosina', function () {
    return view('articles/article_11');
})->name('article_11');

Route::get('case-study/pranie-mocno-zabrudzonego-naroznika-srem', function () {
    return view('casestudy/casestudy_1');
})->name('casestudy_1');

Route::get('case-study/pranie-foteli-samochodowych-z-potu-koscian', function () {
    return view('casestudy/casestudy_2');
})->name('casestudy_2');

Route::get('case-study/pranie-gondoli-wozka-dzieciecego-i-fotelika-samochodowego-koscian', function () {
    return view('casestudy/casestudy_3');
})->name('casestudy_3');

Route::get('case-study/czyszczenie-wieloletniego-tapczanu-i-foteli-za-pomoca-karcher-puzzi-koscian', function () {
    return view('casestudy/casestudy_4');
})->name('casestudy_4');

Route::get('case-study/czyszczenie-stelaza-wozka-dzieciecego-i-pranie-gondoli-oraz-akcesoriow-karcherem-srem', function () {
    return view('casestudy/casestudy_5');
})->name('casestudy_5');

Route::get('case-study/pranie-i-czyszczenie-naroznika-karcherem-koscian', function () {
    return view('casestudy/casestudy_6');
})->name('casestudy_6');



Route::get('case-study/czyszczenie-wozka-dzieciecego-stelazu-i-gondoli-karcher-leszno', function () {
    return view('casestudy/casestudy_8');
})->name('casestudy_8');

Route::get('case-study/czyszczenie-mycie-tapicerki-mlodziezowej-wersalki-kanapy-pranie-tapicerki-karcher-srem', function () {
    return view('casestudy/casestudy_9');
})->name('casestudy_9');

Route::get('case-study/pranie-czyszczenie-materaca-usuwanie-plam-dezynfekcja-karcher-srem', function () {
    return view('casestudy/casestudy_10');
})->name('casestudy_10');

Route::get('case-study/mycie-tapicerki-meblowej-naroznika-krzesel-fotela-pranie-mebli-uslugi-karcher-koscian', function () {
    return view('casestudy/casestudy_11');
})->name('casestudy_11');

Route::get('case-study/pranie-nastopnic-schodowych-czyszczenie-wykladziny-schodowej-karcher-koscian', function () {
    return view('casestudy/casestudy_12');
})->name('casestudy_12');

Route::get('case-study/czyszczenie-tapicerki-naroznika-z-plam-pranie-tapicerki-meblowej-karcher-rydzyna-leszno', function () {
    return view('casestudy/casestudy_13');
})->name('casestudy_13');

Route::get('case-study/pranie-mycie-tapicerki-meblowej-naroznika-uslugi-karcher-srem', function () {
    return view('casestudy/casestudy_14');
})->name('casestudy_14');

Route::get('case-study/pranie-tapicerki-samochodowej-czyszczenie-samochodu-karcher-koscian', function () {
    return view('casestudy/casestudy_15');
})->name('casestudy_15');

Route::get('case-study/pranie-tapicerki-meblowej-czyszczenie-kanapy-naroznika-usuwanie-zapachow-firma-czyszczaca-leszno-lasocice', function () {
    return view('casestudy/casestudy_16');
})->name('casestudy_16');





