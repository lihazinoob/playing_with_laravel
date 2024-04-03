<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

 Route::get('/',[ProductController::class,'index']) ->name('products.index');
 Route::get('/createproduct',[ProductController::class,'create']) ->name('products.create');

 Route::post('/storeproduct',[ProductController::class,'store']) ->name('products.store');
// Route::get('/',[TeamController::class,'CreationofTeam']) ->name('teams.creation');
// Route::post('/storeTeam',[TeamController::class,'storageofTeam']) ->name('teams.storage');