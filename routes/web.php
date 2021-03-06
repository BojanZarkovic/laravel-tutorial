<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'showHomePage']);
Route::get('/post/{id}', [PostsController::class, 'getPostById']);
Route::get('/posts', [PostsController::class, 'getAllPosts']);
Route::get('/posts/user/{userId}', [PostsController::class, 'getPostsByUser']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [PagesController::class, 'showAdminPage']);
    Route::get('/admin/post/new', [PostsController::class, 'showNewPostForm']);
    Route::get('/admin/post/edit/{id}', [PostsController::class, 'showEditPostForm']);
    Route::post('/admin/post', [PostsController::class, 'createNewPost']);
    Route::put('/admin/post/{id}', [PostsController::class, 'editPost']);
    Route::delete('/admin/post/{id}', [PostsController::class, 'deletePost']);

    Route::get('/admin/category/new', [CategoryController::class, 'showNewCategoryForm']);
    Route::post('/admin/category', [CategoryController::class, 'createNewCategory']);
});

require __DIR__.'/auth.php';
