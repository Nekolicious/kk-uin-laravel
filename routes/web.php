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
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KKController;
use App\Models\User;

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

// Admin Dashboard
// Middleware construct in its controller
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::prefix('dashboard')->name('dashboard.')->group(function () {

    // User management
    Route::prefix('usermgmt')->name('usermgmt.')->group(function () {
        // Pending User
        Route::get('/pending', [DashboardController::class, 'pendinguser'])->name('pending');
        Route::prefix('pending')->name('pending.')->group(function () {
            Route::post('/approve', [DashboardController::class, 'approve'])->name('approve');
            Route::post('/decline', [DashboardController::class, 'decline'])->name('decline');
        });

        // All User
        Route::get('/users', [DashboardController::class, 'users'])->name('users');

        // Admin User
        Route::get('/admins', [DashboardController::class, 'admins'])->name('admins');
        Route::prefix('admins')->name('admins.')->group(function () {
            Route::post('/revoke', [DashboardController::class, 'revoke'])->name('revoke');
            Route::post('/grant', [DashboardController::class, 'grant'])->name('grant');
        });

        // Dosen
        Route::get('/dosen', [DosenController::class, 'show'])->name('dosen');
        Route::prefix('dosen')->name('dosen.')->group(function () {
            Route::post('/revoke', [DosenController::class, 'revoke'])->name('revoke');
            Route::post('/grant', [DosenController::class, 'grant'])->name('grant');
        });
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

    // KK
    Route::get('/kk', [KKController::class, 'show'])->name('kk');
    Route::prefix('kk')->name('kk.')->group(function () {
        Route::post('/store', [KKController::class, 'store'])->name('store');
        Route::post('/update', [KKController::class, 'update'])->name('update');
        Route::get('/delete', [KKController::class, 'delete'])->name('delete');
    });
});

// Register & login
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'store'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('approve', [UserController::class, 'approve'])->name('approve');
Route::get('register_success', function () {
    return view('user/register_success');
})->name('register_success');

// Forum Diskusi
Route::resource('posts', PostController::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
