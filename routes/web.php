<?php

use App\Http\Controllers\InputanController;
use App\Http\Controllers\LuasSegitigaController;
use App\Http\Controllers\MahasiswaController;
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
    return view('home',[
        'titlebar' => 'Begonyel - Home Page',
        'title'    => 'Halaman Home'
    ]);
});

Route::get('home', function(){
    return view('home', [
        'titlebar' => 'Begonyel - Home Page',
        'title'    => 'Halaman Home'
    ] );
});

Route::get('about', function(){
    return view('about', [
        //key,        value 
        'titlebar' => 'Begonyel - About Page',
        'title'    => 'Halaman About'
    ]);
});

Route::get('contact', function(){
    return view('contact', ['titlebar' => 'Begonyel - Contact Page']);
});

Route::get('latihan1', function(){
    return view('latihanview.latihan1');
})->name('latihan1');

Route::get('latihan2', function(){
    return view('latihanview.latihan2');
})->name('latihan-2');

Route::get('inputan', [InputanController::class, 'index'])->name('inputan');
Route::get('segitiga', [LuasSegitigaController::class, 'index'])->name('luas-segitiga');

//akses fungsi cetakNama
Route::get('string-nama/{inputnama}', [InputanController::class, 'cetakNama'])->name('string-nama');

Route::get('mahasiswa/inputnilai',[MahasiswaController::class,'create'])->name('mahasiswa.inputnilai');
Route::post('mahasiswa/storenilai',[MahasiswaController::class,'store'])->name('mahasiswa.storenilai');
Route::get('mahasiswa/hasilnilai',[MahasiswaController::class,'hasil'])->name('mahasiswa.hasilnilai');
