<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductsController;
use Illuminate\Routing\Route as RoutingRoute;

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

// New to Laravel 8
Route::get('/products', [ProductsController::class, 'index']);

// Pattern is an integer
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Pattern is a string
Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[a-z]+');
