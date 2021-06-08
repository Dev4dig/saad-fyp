<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

Route::get('/approved', [PostsController::class,'approved'])->name('approved');

Route::get('/rejected', [PostsController::class,'rejected'])->name('rejected');

Route::get('/finalized', [PostsController::class,'finalized'])->name('finalized');

Route::get('/submitted', [PostsController::class,'submitted'])->name('submitted');

Route::get('/edited', [PostsController::class,'edited'])->name('edited');

Route::get('/pending-edit',[PostsController::class,'pending_edit'])->name('pending_edit');