<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;

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
Route::get('/category/{category}', [HomeController::class, 'items'])->name('item.user');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

//user
Route::get('/admin/user-management', [UserController::class, 'index'])->name('user');
Route::get('/admin/user-management/create', [UserController::class, 'create'])->name('user.create');
Route::post('/admin/user-management/store', [UserController::class, 'store'])->name('user.store');
Route::get('/admin/user-management/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/admin/user-management/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/admin/user-management/{user}', [UserController::class, 'delete'])->name('user.delete');


//customer
Route::get('/admin/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/admin/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/admin/customer/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/admin/customer/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::patch('/admin/customer/{customer}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/admin/customer/{customer}', [CustomerController::class, 'delete'])->name('customer.delete');

//testimoni
Route::get('/admin/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::get('/admin/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
Route::post('/admin/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
Route::get('/admin/testimoni/{testimoni}', [TestimoniController::class, 'edit'])->name('testimoni.edit');
Route::patch('/admin/testimoni/{testimoni}', [TestimoniController::class, 'update'])->name('testimoni.update');
Route::delete('/admin/testimoni/{testimoni}', [TestimoniController::class, 'delete'])->name('testimoni.delete');

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

