<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

#

// Question
// Route::apiResource('/questions', App\http\Controllers\QuestionController::class);

// Question
Route::get('/questions', [App\http\Controllers\Question\getController::class, 'GetDataController']);
Route::get('/questions/{id}', [App\http\Controllers\Question\getDetailController::class, 'GetDataDetailController']);
Route::post('/questions', [App\http\Controllers\Question\insertController::class, 'insertDataController']);
Route::put('/questions/{id}', [App\http\Controllers\Question\updateController::class, 'updateDataController']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
