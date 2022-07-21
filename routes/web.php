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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('kelompok-keahlian', [PageController::class, 'kk'])->name('kk');

// Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::group(['middleware' => 'auth'], function(){
    // Route with auth required
// });

// Dashboard, middleware construct in its controller
// User management
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('dashboard/usermgmt/pending', [DashboardController::class, 'pendinguser'])->name('dashboard.pending');
Route::get('dashboard/usermgmt/users', [DashboardController::class, 'users'])->name('dashboard.users');
Route::get('dashboard/usermgmt/admins', [DashboardController::class, 'admins'])->name('dashboard.admins');

// Artikel or aktivitas
Route::get('dashboard/artikel/create', [ArtikelController::class, 'create'])->name('dashboard.artikel.create');
Route::post('dashboard/artikel/store', [ArtikelController::class, 'store'])->name('dashboard.artikel.store');
Route::get('dashboard/artikel', [ArtikelController::class, 'show'])->name('dashboard.artikel');
Route::get('dashboard/artikel/edit/{artikel_id}', [ArtikelController::class, 'edit'])->name('dashboard.artikel.edit');
Route::post('dashboard/artikel/update', [ArtikelController::class, 'update'])->name('dashboard.artikel.update');
Route::get('dashboard/artikel/delete', [ArtikelController::class, 'delete'])->name('dashboard.artikel.delete');

// Gambar
Route::get('dashboard/gambar', [GambarController::class, 'show'])->name('dashboard.gambar');
Route::get('dashboard/gambar/delete', [GambarController::class, 'delete'])->name('dashboard.gambar.delete');

// Kategori
Route::get('dashboard/kategori', [KategoriController::class, 'show'])->name('dashboard.kategori');
Route::post('dashboard/kategori/store', [KategoriController::class, 'store'])->name('dashboard.kategori.store');
Route::post('dashboard/kategori/update', [KategoriController::class, 'update'])->name('dashboard.kategori.update');
Route::get('dashboard/kategori/delete', [KategoriController::class, 'delete'])->name('dashboard.kategori.delete');

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