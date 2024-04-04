<?php

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuKeluargaController;


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
    return redirect(route('login'));
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
   Route::get('/dashboard', function () {
       return view('dashboard');
   })->name('dashboard') ;
   Route::get('/kk', [KartuKeluargaController::class, 'index'])->name('kk-list');
   Route::get('/penduduk', [PendudukController::class, 'index'])->name('pdk-list');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/create', [KartuKeluargaController::class, 'create'])->name('kk-create');
    Route::post('/create', [KartuKeluargaController::class, 'store'])->name('kk-store');
    Route::get('/kk-edit/{kartuKeluarga}', [KartuKeluargaController::class, 'edit'])->name('kk-edit');
    Route::post('/kk-edit/{kartuKeluarga}', [KartuKeluargaController::class, 'update'])->name('kk-update');
    Route::get('/kk-delete/{kartuKeluarga}', [KartuKeluargaController::class, 'destroy'])->name('kk-delete');

    Route::get('/pdk-create', [PendudukController::class, 'create'])->name('pdk-create');
    Route::post('pdk-create', [PendudukController::class, 'store'])->name('pdk-store');

    Route::get('user', [UserController::class, 'index'])->name('user-list');
    Route::get('user/create', [UserController::class, 'create'])->name('user-create');
    Route::post('user/create', [UserController::class, 'store'])->name('user-store');
});
