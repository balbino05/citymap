<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterestPointController;
use App\Http\Controllers\PointController;

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
Route::get('category', [InterestPointController::class, 'category']);
Route::get('category-points', [InterestPointController::class, 'categoryPoints']);
Route::get('points', [PointController::class, 'index']);
Route::post('points', [PointController::class, 'store']);



