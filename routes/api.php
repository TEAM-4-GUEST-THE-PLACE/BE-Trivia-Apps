<?php
use App\Http\Controllers\Diamond\deleteController;
use App\Http\Controllers\Diamond\detailController;
use App\Http\Controllers\Diamond\getController;
use App\Http\Controllers\Diamond\updateController;

use App\Http\Controllers\User\getsController;
use App\Http\Controllers\User\updatesController;
use App\Http\Controllers\User\detailsController;
use App\Http\Controllers\User\deletesController;

use App\Http\Controllers\Transaction\getTransaction;
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
Route::delete('/questions/{id}', [App\http\Controllers\Question\deleteController::class, 'deleteDataController']);


// Avatar
Route::post('/avatar', [App\http\Controllers\Avatar\insertController::class, 'insertDataController']);
Route::get('/avatar', [App\http\Controllers\Avatar\getController::class, 'GetDataController']);
Route::put('/avatar/{id}', [App\http\Controllers\Avatar\updateController::class, 'updateDataController']);
Route::delete('/avatar/{id}', [App\http\Controllers\Avatar\deleteController::class, 'deleteDataController']);


//posts
Route::get('/diamond', [getController::class, 'getDiamond']);
Route::get('/diamond/{id}', [detailController::class, 'detailDiamond']);
Route::post('/diamond', [App\Http\Controllers\Diamond\insertController::class, 'insertController']);
Route::put('/diamond/{id}', [updateController::class, 'updateDiamond']);
Route::delete('/diamond/{id}', [deleteController::class, 'removeDiamond']);

//User
Route::get('/user', [getsController::class, 'getUsers']);
Route::get('/user/{id}', [detailsController::class, 'detailUser']);
Route::post('/user', [App\Http\Controllers\User\postsController::class, 'AddUser']);
Route::put('/user/{id}', [updatesController::class, 'updateUser']);
Route::put('/user/{id}/update-avatar', [App\Http\Controllers\User\usersAvatarController::class, 'updateAvatar']);
Route::delete('/User/{id}', [deletesController::class, 'removeUser']);

//Transaction
Route::get('/transaction', [getTransaction::class, 'GetTransaction']);
Route::post('/transaction', [App\Http\Controllers\Transaction\insertTransaction::class, 'insertController']);