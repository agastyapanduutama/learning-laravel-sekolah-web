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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//posts
Route::get('/post', [App\Http\Controllers\Api\PostController::class, 'index']);
Route::get('/post/{id?}', [App\Http\Controllers\Api\PostController::class, 'show']);
Route::get('/homepage/post', [App\Http\Controllers\Api\PostController::class, 'PostHomePage']);

//events
Route::get('/event', [App\Http\Controllers\Api\EventController::class, 'index']);
Route::get('/event/{id?}', [App\Http\Controllers\Api\EventController::class, 'show']);
Route::get('/homepage/event', [App\Http\Controllers\Api\EventController::class, 'EventHomePage']);

//video
Route::get('/video', [App\Http\Controllers\Api\VideoController::class, 'index']);
Route::get('/homepage/video', [App\Http\Controllers\Api\VideoController::class, 'VideoHomepage']);

//photo
Route::get('/photo', [App\Http\Controllers\Api\PhotoController::class, 'index']);
Route::get('/homepage/photo', [App\Http\Controllers\Api\PhotoController::class, 'PhotoHomepage']);

//category
Route::get('/category', [App\Http\Controllers\Api\CategoryController::class, 'index']);
Route::get('/homepage/category', [App\Http\Controllers\Api\CategoryController::class, 'CategoryController']);

//slider
Route::get('/slider', [App\Http\Controllers\Api\SliderController::class, 'index']);