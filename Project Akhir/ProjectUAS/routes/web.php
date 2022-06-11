<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MenuController::class, 'index'])->name('landing.page');
Route::get('/login', [CustomerController::class, 'create'])->name('cus.login');
Route::post('/login', [CustomerController::class, 'store'])->name('cus.action');
Route::get('/home', [CustomerController::class, 'home'])->name('cus.home');

Route::get('/admin/dashboard', [UserController::class, 'index'])->name('admin.home')->middleware('auth');
Route::get('/admin/login', [UserController::class, 'loginAdmin'])->name('admin.login')->middleware('guest');
Route::post('/admin/login', [UserController::class, 'adminAction'])->name('admin.action');
Route::get('/admin/ViewMenu', [UserController::class, 'viewmenu'])->name('admin.ViewMenu');
Route::get('/admin/{menu:id}/edit', [MenuController::class, 'edit'])->name('admin.FormUpdate');
Route::post('/admin/{menu:id}/edit', [MenuController::class, 'update'])->name('admin.ActionFormUpdate');
Route::delete('/admin/hapus/{menu:id}', [MenuController::class, 'destroy'])->name('admin.HapusMenu');
Route::get('/admin/tambah', [MenuController::class, 'create'])->name('admin.TambahMenu');
Route::post('/admin/tambah', [MenuController::class, 'store'])->name('admin.actionTambahMenu');
