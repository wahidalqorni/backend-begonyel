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

// Route::get('/', function () {
//     return view('welcome'); // memanggil file view yang ada di resource/views
// });

// Route::get('/', function () {
//     return 'Laravel'; // langsung mengembalikan apa yg di set di dalam return
// });

Route::get('/', function(){
    return view('home');
});

Route::get('home', function(){
    return view('home');
});

Route::get('about', function(){
    return view('about');
});

Route::get('contact', function(){
    return view('contact');
});

Route::get('latihan1', function(){
    return view('latihanview.latihan1');
})->name('latihan1');

Route::get('latihan2', function(){
    return view('latihanview.latihan2');
})->name('latihan-2');
