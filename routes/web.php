<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AjukanPengaduanController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPengaduanController;
use Illuminate\Http\Request;

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
    return view('/pelapor/home',[
        "title"=>"Home"
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/pelapor/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store']);

// Route::get('/aktivitassaya/create', [AjukanPengaduanController::class, 'create'])->name('aktivitassaya.create');
// Route::post('/aktivitassaya', [AjukanPengaduanController::class, 'store'])->name('aktivitassaya.store');
Route::get('/pelapor/aktivitassaya', [AktivitasController::class, 'index'])->name('aktivitassaya.index')->middleware('auth');
Route::resource('/pelapor/aktivitassaya', AktivitasController::class);

Route::get('/pelapor/ajukanpengaduan/create', [AjukanPengaduanController::class, 'create'])->name('ajukanpengaduan.create');
Route::post('/pelapor/ajukanpengaduan',[AjukanPengaduanController::class,'store'])->name('ajukanpengaduan.store');
Route::resource('/pelapor/ajukanpengaduan', AjukanPengaduanController::class)->middleware('auth');

Route::get('/pelapor/tatacarapengaduan',[PostController::class,'index3']);
Route::get('/pelapor/alurpengaduan',[PostController::class,'index2']);
Route::get('/pelapor/tentangwbs',[PostController::class,'index1']);
Route::get('/partials/footer', [PostController::class],'index');
Route::get('partials/navbar',[PostController::class], 'index');
Route::get('/pelapor/bantuan',[PostController::class,'index']);

//Halaman Admin

Route::get('/admin', function () {
    return view('/admin/home',[
        "title"=>"Home Admin"
    ]);
});