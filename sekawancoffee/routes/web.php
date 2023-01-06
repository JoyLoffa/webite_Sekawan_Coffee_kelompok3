<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/galery', [HomepageController::class, 'galery']);
Route::get('/onlineorder', [HomepageController::class, 'onlineorder']);
Route::get('/history', [HomepageController::class, 'history']);
Route::get('/tentangkami', [HomepageController::class, 'tentangkami']);

// Route::get('produk/{category}', [HomepageController::class, 'produk'])->name('home.produk');
// Route::get('kategori/{category}', [HomepageController::class, 'kategori'])->name('home.kategori');
// Route::get('search', [HomepageController::class, 'search'])->name('home.search');

Route::get('/laman', [HomepageController::class, 'laman']);
Route::get('/admin', [HomepageController::class, 'admin']);

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
 // route profil
Route::prefix('admin/profil')->group(function () {
    Route::get('/', [AdminController::class, 'profil'])->name('admin.profil');
    Route::post('update', [AdminController::class, 'update_profil'])->name('admin.update_profil');
});
// route produk
Route::prefix('admin/produk')->group(function () {
    Route::get('/', [AdminController::class, 'produk'])->name('admin.produk');
    Route::get('delete/{category}', [AdminController::class, 'delete_produk'])->name('admin.delete_produk');
    Route::post('edit', [AdminController::class, 'edit_produk'])->name('admin.edit_produk');
    Route::post('create', [AdminController::class, 'create_produk'])->name('admin.create_produk');
    Route::post('update', [AdminController::class, 'update_produk'])->name('admin.update_produk');
});
// route kategori
Route::prefix('admin/kategori')->group(function () {
    Route::get('/', [AdminController::class, 'kategori'])->name('admin.kategori');
    Route::get('delete/{category}', [AdminController::class, 'delete_kategori'])->name('admin.delete_kategori');
    Route::post('create', [AdminController::class, 'create_kategori'])->name('admin.create_kategori');
    Route::post('update', [AdminController::class, 'update_kategori'])->name('admin.update_kategori');
});