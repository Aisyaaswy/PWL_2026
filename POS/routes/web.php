<?php
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', ['name' => 'Aisya']);
});

use App\Http\Controllers\ProductController; 

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

use App\Http\Controllers\UserController;

Route::get('/{id}/name/{name}', [UserController::class, 'show']);

use App\Http\Controllers\SalesController;

Route::get('/sales', [SalesController::class, 'index']);
Route::post('/sales/process', [SalesController::class, 'process'])->name('sales.process');