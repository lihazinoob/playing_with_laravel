<?php

use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teams', [TeamsController::class, 'index']);
Route::get('/createteam',[TeamsController::class, 'create']);
Route::post('/createteam',[TeamsController::class, 'show'])->name('team.show');
