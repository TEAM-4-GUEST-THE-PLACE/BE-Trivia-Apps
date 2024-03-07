<?php
use App\Http\Controllers\Diamond\deleteController;
use App\Http\Controllers\Diamond\detailController;
use App\Http\Controllers\Diamond\getController;
use App\Http\Controllers\Diamond\postController;
use App\Http\Controllers\Diamond\updateController;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\getsController;
use App\Http\Controllers\User\postsController;
use App\Http\Controllers\User\updatesController;
use App\Http\Controllers\User\detailsController;
use App\Http\Controllers\User\deletesController;

//posts
Route::get('/CekDiamond', [getController::class, 'getDiamond']);
Route::post('/AddDiamond', [postController::class, 'AddDiamond']);
Route::put('/UpdateDiamond/{id}', [updateController::class, 'updateDiamond']);
Route::get('/DetailDiamond/{id}', [detailController::class, 'detailDiamond']);
Route::delete('/RemoveDiamond/{id}', [deleteController::class, 'removeDiamond']);


Route::get('/user', [getsController::class, 'getUsers']);
Route::post('/AddUser', [postsController::class, 'AddUser']);
Route::put('/UpdateUser/{id}', [updatesController::class, 'updateUser']);
Route::get('/DetailUser/{id}', [detailsController::class, 'detailUser']);
Route::delete('/RemoveUser/{id}', [deletesController::class, 'removeUser']);










