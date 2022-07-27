<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

//category
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::patch('/admin/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/admin/category/{category}', [CategoryController::class, 'delete'])->name('category.delete');

//item
Route::get('/admin/item', [ItemController::class, 'index'])->name('item');
Route::get('/admin/item/create', [ItemController::class, 'create'])->name('item.create');
Route::post('/admin/item/store', [ItemController::class, 'store'])->name('item.store');
Route::get('/admin/item/{item}', [ItemController::class, 'edit'])->name('item.edit');
Route::patch('/admin/item/{item}', [ItemController::class, 'update'])->name('item.update');
Route::delete('/admin/item/{item}', [ItemController::class, 'delete'])->name('item.delete');
Route::delete('/admin/item/addtional/image/{item_image}', [ItemController::class, 'additionalDelete'])->name('item.delete.image');

