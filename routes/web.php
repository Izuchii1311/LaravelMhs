<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

// route mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
// Route::get('/detailmahasiswa/{id}', [MahasiswaController::class, 'detail'])->name('detailmahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

// CRUD
Route::post('/insertdatamahasiswa', [MahasiswaController::class, 'insertdatamahasiswa'])->name('insertdatamahasiswa');
Route::get('/readdatamahasiswa/{id}', [MahasiswaController::class, 'readdata'])->name('readdata');
Route::post('/updatedatamahasiswa/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedatamahasiswa/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata');

// Export PDF & Excel
Route::get('/exportpdf', [MahasiswaController::class, 'exportpdf'])->name('exportpdf');
Route::get('/exportexcel', [MahasiswaController::class, 'exportexcel'])->name('exportexcel');
