<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KnnController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MatkulController;

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


Route::get('/', [PagesController::class, 'dashboard']);
Route::get('/kaprodi', [PagesController::class, 'kaprodi']);
Route::get('/dekan', [PagesController::class, 'dekan']);
Route::get('/ddashboard', [PagesController::class, 'ddashboard']);
Route::get('/all-user', [PagesController::class, 'alluser']);
Route::get('/all-user/add', [UserController::class, 'adduser']);
Route::get('/all-user/{user}/input-matkul', [MatkulController::class, 'addmatkul']);
Route::post('/all-user/{user}/input-matkul', [MatkulController::class, 'storematkul']);
Route::post('/all-user/store', [UserController::class, 'storeuser']);

//manajemen matkul
Route::get('/mmatkul', [PagesController::class, 'allmatkul']);
Route::post('/mmatkul/tambahmatkul', [MatkulController::class, 'tambahmatkul']);
Route::post('/mmatkul/tambahkelas', [MatkulController::class, 'kelas']);
// dosen
Route::get('/dosen', [PagesController::class, 'dosen']);
// input nilai
Route::post('/input-nilai/{user}/storekawal', [NilaiController::class, 'storeawal']);
Route::get('/input-nilai', [PagesController::class, 'inputnilai']);
Route::get('/input-nilai/{user}/pilih-matkul', [PagesController::class, 'pilihmatkul']);
Route::get('/input-nilai/{matkul}/input', [PagesController::class, 'nilaiinput']);
Route::post('/input-nilai/{ambil}/store', [NilaiController::class, 'storeakhir']);

//knn-input&&Hitung
Route::get('/knn-nilai', [PagesController::class, 'knninput']);
Route::post('/knn/count',[KnnController::class, 'prediksi']);
Route::post('/knn-import',[KnnController::class, 'import'])->name('knn-import');

//PDF
Route::get('/coba', [NilaiController::class, 'hitungrata']);
Route::get('/pdf/{user}', [PagesController::class, 'pdf']);

// Route::get('/all-user', [PagesController::class, 'alluser']);
// Route::get('/all-user/{user}/edit', [PagesController::class, 'edituser']);
// Route::get('/all-product', [PagesController::class, 'allproduct']);
// Route::get('/roles', [PagesController::class, 'roles']);

// Route::get('/all-user/add', [UserController::class, 'adduser']);
// Route::post('/user/store', [UserController::class, 'storeuser']);
// Route::post('/user/update', [UserController::class, 'updateuser']);
// Route::post('/user/destroy', [UserController::class, 'deleteuser']);

// Route::get('/roles/add', [RoleController::class, 'addrole']);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
