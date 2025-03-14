<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    // Products
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/detail/{detailId}', [ProductController::class, 'filterByDetail']);
    Route::get('/products/category/{categoryId}', [ProductController::class, 'filterByCategory']);
    Route::get('/products/search', [ProductController::class, 'search']);
    Route::get('/products/{id}', [ProductController::class, 'show']);

    //categories
    Route::get('/categories', [CategoryController::class, 'index']);

    //details
    Route::get('/details/{id}', [DetailController::class, 'show']);
});



