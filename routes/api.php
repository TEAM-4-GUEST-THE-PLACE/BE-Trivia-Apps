<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;


//posts
Route::resource('/posts', PostController::class);


