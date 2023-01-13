<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    Route::get('/post/create', [PostController::class, 'index']);
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
});
// Route::prefix('admin')->group(function () {
//     Route::get('/post/create', [PostController::class, 'index'])->name('post.create');
//     Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
// });
// Route::get('/post', [PostController::class, 'index']);
