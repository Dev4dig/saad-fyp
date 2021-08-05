<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\managementController;
use App\http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('submitted');
});



Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

Route::get('/login', [userController::class,'index_login'])->name('login');
Route::post('/login', [userController::class,'login']);

Route::get('/approved', [PostsController::class,'approved'])->name('approved');

Route::get('/register', [userController::class,'register'])->name('approved');

Route::get('/rejected', [PostsController::class,'rejected'])->name('rejected');

Route::get('/finalized', [PostsController::class,'finalized'])->name('finalized');

Route::get('/submitted', [PostsController::class,'submitted'])->name('submitted');

Route::get('/edited', [PostsController::class,'edited'])->name('edited');

Route::get('/full-post',[PostsController::class,'full_post'])->name('full-post');

Route::get('/edit-post',[PostsController::class,'edit_post'])->name('edit-post');

Route::get('/pending-edit',[PostsController::class,'pending_edit'])->name('pending_edit');

Route::get('/manage-admin',[managementController::class,'index'])->name('manage-admin');
