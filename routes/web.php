<?php

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


Route::get('/admin', [PagesController::class, 'showAdminPage'])->middleware(['auth']);
Route::get('/admin/post/new', [PostsController::class, 'showNewPostForm'])->middleware(['auth']);
Route::get('/admin/post/edit/{id}', [PostsController::class, 'showEditPostForm'])->middleware(['auth']);
Route::post('/admin/post', [PostsController::class, 'createNewPost'])->middleware(['auth']);
Route::put('/admin/post/{id}', [PostsController::class, 'editPost'])->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
