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
})->name('profile')->middleware('custom_auth');

Route::get('/login', [userController::class,'index_login'])->name('login');
Route::post('/login', [userController::class,'login']);

Route::post('/logout', [userController::class,'logout'])->name('logout');
Route::get('/approved', [PostsController::class,'approved'])->name('approved')->middleware('custom_auth');

Route::post('/approve-article/{id}', [PostsController::class,'approve_article'])->name('approve-article')->middleware('custom_auth');
Route::post('/delete-article/{id}', [PostsController::class,'delete_article'])->name('delete-article')->middleware('custom_auth');
Route::post('/reject-article/{id}', [PostsController::class,'reject_article'])->name('reject-article')->middleware('custom_auth');


Route::get('/register-admin', [userController::class,'register'])->name('register-admin');
Route::get('/register-user', [userController::class,'register_user'])->name('register-user');

Route::get('/rejected', [PostsController::class,'rejected'])->name('rejected')->middleware('custom_auth');

Route::get('/finalized', [PostsController::class,'finalized'])->name('finalized')->middleware('custom_auth');

Route::get('/submitted', [PostsController::class,'submitted'])
->name('submitted')
->middleware('custom_auth');

Route::get('/edited', [PostsController::class,'edited'])->name('edited')->middleware('custom_auth');

Route::get('/full-post/{id}',[PostsController::class,'full_post'])->name('full-post')->middleware('custom_auth');

Route::get('/edit-post',[PostsController::class,'edit_post'])->name('edit-post')->middleware('custom_auth');

Route::get('/pending-edit',[PostsController::class,'pending_edit'])->name('pending_edit')->middleware('custom_auth');

Route::get('/manage-admin',[managementController::class,'index'])->name('manage-admin')->middleware('custom_auth', 'admin');
















Route::post('/delete-user/{id}', [userController::class,'delete_user'])->name('delete-user')->middleware('custom_auth');
Route::post('/approve-user/{id}', [userController::class,'approve_user'])->name('approve-user')->middleware('custom_auth');
Route::post('/add-moderator', [managementController::class,'add_moderator'])->name('add-moderator')->middleware('custom_auth');
Route::post('/delete-moderator/{id}', [managementController::class,'delete_moderator'])->name('delete-moderator')->middleware('custom_auth');


Route::post('/reject-post/{id}', [PostsController::class,'reject_post'])->name('reject-post')->middleware('custom_auth');
Route::post('/approve-post/{id}', [PostsController::class,'approve_post'])->name('approve-post')->middleware('custom_auth');
Route::post('/to-edit-post/{id}', [PostsController::class,'to_edit_post'])->name('to-edit-post')->middleware('custom_auth');
