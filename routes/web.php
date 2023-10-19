<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AjukanPengaduanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store']);

Route::get('/aktivitassaya/create', [AjukanPengaduanController::class, 'create'])->name('aktivitassaya.create');
Route::post('/aktivitassaya', [AjukanPengaduanController::class, 'store'])->name('aktivitassaya.store');
Route::resource('aktivitassaya', AjukanPengaduanController::class);

Route::post('/ajukanpengaduan',[AjukanPengaduanController::class,'store']);
Route::resource('/ajukanpengaduan', AjukanPengaduanController::class)->middleware('auth');

Route::get('/bantuan',[PostController::class,'index']);
Route::get('/tatacarapengaduan',[PostController::class,'index3']);
Route::get('/alurpengaduan',[PostController::class,'index2']);
Route::get('/tentangwbs',[PostController::class,'index1']);
Route::get('/partials/footer', [PostController::class],'index');
Route::get('partials/navbar',[PostController::class], 'index');
