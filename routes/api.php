<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TemplateController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function(){
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
});
Route::middleware('auth:sanctum')->prefix('auth')->group(function(){
Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/templates', TemplateController::class, 'allTempplates');
Route::get('templates/category/{category}', TemplateController::class, 'sortByCategory');
Route::get('/templates/category/{id}', TemplateController::class, 'sortById');

