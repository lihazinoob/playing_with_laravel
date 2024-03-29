<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductController::class,'index']) ->name('products.index');
Route::get('/createproduct',[ProductController::class,'create']) ->name('products.create');

