<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        $post = Post::all();
        return view('clients.homepage', compact('product','category','post'));
    }
}
