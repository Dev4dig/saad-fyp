<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ApiRequestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    
    
    Route::post('/post-article', [ApiRequestController::class,'post_article']);
    Route::post('/post-comment', [ApiRequestController::class,'post_comment']);

});

Route::get('/get-comments/{id}', [ApiRequestController::class,'get_comments']);
Route::post('/register', [ApiRequestController::class,'register']);
Route::post('/login', [ApiRequestController::class,'login']);