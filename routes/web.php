<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, "index"]);
Route::get('createpost', [PostController::class,'create'])->name('createpost');
Route::get('createcategory', [CategoryController::class,'create'])->name('createcategory');
Route::get('/myposts', [PostController::class,'userpost'])->name('myposts');

Route::get('test', function () {
    abort(403);
});
Route::get('/blogs', [PostController::class,'blog'])->name('/blogs');
Route::get('dashboard', [ProfileController::class,'edit'])->name('dashboard');
Route::patch('/{user}/update', [ProfileController::class,'update'])->middleware(['auth'])->name('users.update');
Route::patch('/store', [PostController::class,'store'])->middleware(['auth'])->name('posts.store');
Route::patch('/categorystore', [CategoryController::class,'store'])->name('category.store');
Route::get('/{id}/editpost', [PostController::class,'edit'])->middleware(['auth']);
Route::post('/{post}/update', [PostController::class,'update'])->middleware(['auth'])->name('posts.update');
Route::post('/{post}/destroy', [PostController::class,'destroy'])->middleware(['auth'])->name('posts.destroy');
Route::get('/{id}/deletepost', [PostController::class,'delete'])->middleware(['auth']);


require __DIR__.'/auth.php';
