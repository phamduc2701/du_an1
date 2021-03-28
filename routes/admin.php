<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;

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
Route::view('','admin.admin');

//categories
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/add', [CategoryController::class, 'add'])->name('category.add-cate');
    Route::post('category/add', [CategoryController::class, 'saveAdd']);
    Route::get('category/{id}/remove', [CategoryController::class, 'remove'])->name('category.remove'); 

//products

    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/add', [ProductController::class, 'add'])->name('product.add-product');
    Route::post('/add', [ProductController::class, 'saveAdd']);
    Route::get('/{id}/remove', [ProductController::class, 'remove'])->name('product.remove');
?>