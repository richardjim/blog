<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

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
    Route::get('/category/create', [CategoriesController::class, 'create'])->name('category.create');
    Route::get('/category/index', [CategoriesController::class, 'index'])->name('category.index');
    Route::post('/category/store', [CategoriesController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
    Route::post('/category/delete/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');
});
// Route::prefix('admin')->group(function () {
//     Route::get('/post/create', [PostController::class, 'index'])->name('post.create');
//     Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
// });
// Route::get('/post', [PostController::class, 'index']);
