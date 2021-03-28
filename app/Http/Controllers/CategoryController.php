<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function add()
    {
        return view('admin.category.add-cate');
    }

    public function saveAdd(Request $request)
    {
        $model = new Category();
        $model->name = $request->name;
        $model->save();
        return redirect(route('category.index'));
    }

    public function remove($id)
    {
        Category::destroy($id);
        return redirect(route('category.index'));
    }
}
