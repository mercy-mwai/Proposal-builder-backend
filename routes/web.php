<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::prefix('auth')->group(function(){
Route::get('/google',[AuthController::class, 'redirect'])->name('redirect');
Route::get('/google/callback', [AuthController::class, 'googleAuthentication']);
});
