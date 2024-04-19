<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterestPointController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\CategoryController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('interest-points', [InterestPointController::class, 'index']);
Route::post('interest-points', [InterestPointController::class, 'store']);
Route::post('category', [InterestPointController::class, 'category']);
Route::get('category-points', [CategoryController::class, 'index']);



