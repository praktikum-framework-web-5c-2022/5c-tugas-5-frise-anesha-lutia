<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('mahasiswa')->group(function(){
    Route::get('/index', [MahasiswaController::class,'index'])->name('mahasiswa.index');
    Route::get('/edit/{id}', [MahasiswaController::class,'edit'])->name('mahasiswa.edit');
    Route::get('/create', [MahasiswaController::class,'create'])->name('mahasiswa.create');
    Route::post('/insert',[MahasiswaController::class,'insert'])->name('mahasiswa.insert');
    Route::post('/update/{id}',[MahasiswaController::class,'update'])->name('mahasiswa.update');
    Route::delete('/delete/{id}',[MahasiswaController::class,'delete'])->name('mahasiswa.delete');
});
