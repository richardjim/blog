<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;

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
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/post/create', [PostsController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostsController::class, 'store'])->name('post.store');
    Route::get('/post/edit/{id}', [PostsController::class, 'edit'])->name('post.edit');
    Route::post('/post/update/{id}', [PostsController::class, 'update'])->name('post.update');
    Route::post('/post/delete/{id}', [PostsController::class, 'destroy'])->name('post.destroy');
    Route::get('/post/index', [PostsController::class, 'index'])->name('post.index');
    Route::post('/post/kill/{id}', [PostsController::class, 'kill'])->name('post.kill');
    Route::get('/post/restore/{id}', [PostsController::class, 'restore'])->name('post.restore');
    Route::get('/post/trashed', [PostsController::class, 'trashed'])->name('post.trashed');
    Route::get('/category/create', [CategoriesController::class, 'create'])->name('category.create');
    Route::get('/category/index', [CategoriesController::class, 'index'])->name('category.index');
    Route::post('/category/store', [CategoriesController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
    Route::post('/category/delete/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');
    Route::get('/tags', [TagsController::class, 'index'])->name('tags');
    Route::get('/tags/edit/{id}', [TagsController::class, 'edit'])->name('tags.edit');
    Route::post('/tags/update/{id}', [TagsController::class, 'update'])->name('tags.update');
    Route::post('/tags/delete/{id}', [TagsController::class, 'destroy'])->name('tags.destroy');
    Route::get('/tags/create', [TagsController::class, 'create'])->name('tags.create');
    Route::post('/tags/store', [TagsController::class, 'store'])->name('tags.store');
});
// Route::prefix('admin')->group(function () {
//     Route::get('/post/create', [PostController::class, 'index'])->name('post.create');
//     Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
// });
// Route::get('/post', [PostController::class, 'index']);
