<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// Route::resource('photos', PhotoController::class)->only([ 
//     'index', 'show' 
// ]); 
// Route::resource('photos', PhotoController::class)->except([ 
//     'create', 'store', 'update', 'destroy' 
// ]);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Aisya']);
// });
    
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Aisya']);
// });
        
Route::get('/greeting', [WelcomeController::class, 
    'greeting']);
        
