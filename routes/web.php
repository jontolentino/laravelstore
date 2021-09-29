<?php

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
use App\Http\Controllers\ProductController;
Route::get('/', [ProductController::class, 'main']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/save', [ProductController::class, 'save']);
Route::get('/product/{id}/show_edit', [ProductController::class, 'show_edit']);
Route::put('/product/{id}/save_edit', [ProductController::class, 'save_edit']);
Route::get('/order', [ProductController::class, 'show_orders']);



