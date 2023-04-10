<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UploadgambarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
})->name('home');;

// Route::get('/posts', function () {
//     return view('posts');
// })->name('posts');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::resource('mahasiswa', MahasiswaController::class) ->name('index', 'mahasiswa');
Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/data-gambar', [UploadgambarController::class, 'index'])->name('data-gambar.index');
Route::get('/create-gambar', [UploadgambarController::class, 'create'])->name('create-gambar.create');
Route::post('/simpan-gambar', [UploadgambarController::class, 'store'])->name('simpan-gambar.store');
Route::get('/edit-gambar/{id}', [UploadgambarController::class, 'edit'])->name('edit-gambar.edit');
Route::post('/update-gambar/{id}', [UploadgambarController::class, 'update'])->name('update-gambar.update');
Route::get('/delete-gambar/{id}', [UploadgambarController::class, 'destroy'])->name('delete-gambar.destroy');
Route::get('/posts', [UploadgambarController::class, 'index'])->name('posts');
