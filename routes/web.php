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
    return view('Home');
});

//Collegamento a questa route senza name
Route::get('/hello-world', function () {
    $titolo = 'Hello World';
    $sottotitolo = 'Questo è il mio primo progetto in php';
    $colori = ['rosso', 'giallo', 'verde', 'blu', 'arancione', 'viola'];
    return view('HelloWorld', compact('titolo', 'sottotitolo', 'colori'));
});

//Collegamento a questa route tramite name
Route::get('/about', function () {
    return view('About');
})->name('about');

Route::get('/contact', function () {
    return view('Contact');
})->name('contact');
