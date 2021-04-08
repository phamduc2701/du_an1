<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;

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

//table
Route::view('', 'admin.admin');

//categories
Route::prefix('category')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/add', [CategoryController::class, 'add'])->name('category.add-cate');
        Route::post('/add', [CategoryController::class, 'saveAdd']);
        Route::get('/{id}/remove', [CategoryController::class, 'remove'])->name('category.remove');
    });

//products
Route::prefix('product')
    ->middleware('auth')
    ->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('product.index');
        Route::get('/add', [ProductController::class, 'add'])->name('product.add-product');
        Route::post('/add', [ProductController::class, 'saveAdd']);
        Route::get('/{id}/remove', [ProductController::class, 'remove'])->name('product.remove');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/edit/{id}', [ProductController::class, 'saveEdit']);
    });
//post
Route::prefix('post')
    ->middleware('auth')
    ->group(function () {
        Route::get('', [PostController::class, 'index'])->name('post.index');
        Route::get('/add', [PostController::class, 'add'])->name('post.add-post');
        Route::post('/add', [PostController::class, 'saveAdd']);
        Route::get('/{id}/remove', [PostController::class, 'remove'])->name('post.remove');
    });

//Login
Route::view('login', 'auth.login')->name('login');
Route::post('login', [LoginController::class, 'stopLogin']);

//Logout
Route::any('logout', function () {
    Auth::logout();
    return redirect(route('homepage'));
})->name('logout');
