<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Product\Interface\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{id}', [ProductController::class, 'show']);
