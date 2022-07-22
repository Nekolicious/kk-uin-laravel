<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GambarController;

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

// User page
// Landing Page
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('kelompok-keahlian', [PageController::class, 'kk'])->name('kk');
Route::get('artikel/{slug}', [PageController::class, 'artikel'])->name('artikel');

// Admin Dashboard, middleware construct in its controller
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('dashboard')->name('dashboard.')->group(function () {

    // User management
    Route::prefix('usermgmt')->name('usermgmt.')->group(function () {
        Route::get('/pending', [DashboardController::class, 'pendinguser'])->name('pending');
        Route::get('/users', [DashboardController::class, 'users'])->name('users');
        Route::get('/admins', [DashboardController::class, 'admins'])->name('admins');
    });

    // Artikel or aktivitas
    Route::get('/artikel', [ArtikelController::class, 'show'])->name('artikel');
    Route::prefix('artikel')->name('artikel.')->group(function () {
        Route::get('/create', [ArtikelController::class, 'create'])->name('create');
        Route::post('/store', [ArtikelController::class, 'store'])->name('store');
        Route::get('/edit/{artikel_id}', [ArtikelController::class, 'edit'])->name('edit');
        Route::post('/update', [ArtikelController::class, 'update'])->name('update');
        Route::get('/delete', [ArtikelController::class, 'delete'])->name('delete');
    });

    // Gambar
    Route::get('/gambar', [GambarController::class, 'show'])->name('gambar');
    Route::prefix('gambar')->name('gambar.')->group(function () {
        Route::get('/delete', [GambarController::class, 'delete'])->name('delete');
    });

    // Kategori
    Route::get('/kategori', [KategoriController::class, 'show'])->name('kategori');
    Route::prefix('kategori')->name('kategori.')->group(function () {
        Route::post('/store', [KategoriController::class, 'store'])->name('store');
        Route::post('/update', [KategoriController::class, 'update'])->name('update');
        Route::get('/delete', [KategoriController::class, 'delete'])->name('delete');
    });
});

// Register & login
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('approve', [UserController::class, 'approve'])->name('approve');
Route::get('register_success', function () {
    return view('user/register_success');
})->name('register_success');

// Route::get('header_akun', function () {
//     return view('header_akun');
// })->name('header_akun');

// Forum Diskusi
Route::resource('posts', PostController::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
