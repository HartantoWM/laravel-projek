<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JilbabController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');


});


Route::get('/hijab', 
[JilbabController::class, 'index']);

Route::get('/admin/products', [ProductController::class,'index'])->name('products.index');
Route::get('/admin/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/admin/products', [ProductController::class,'store'])->name('products.store');