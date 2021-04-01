<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::paginate(5);
        return view('admin.product.index', compact('product'));

    }

    public function add()
    {
        $product = Product::with('category')->get();
        $category = Category::all();
        return view('admin.product.add-product', compact('category'));
    }
    public function saveAdd(Request $request)
    {
        $model = new Product();
        
        $model->name = $request->name;
        $model->price = $request->price;
        $model->sale = $request->sale;
        $model->detail = $request->detail;
        $model->cate_id = $request->cate_id;
        
        if ($request->hasFile('image')) {
            $fileName = uniqid() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $model->image =  "storage/" . $filePath;
        }

        $model->save();
        return redirect(route('product.index'));
    }
    public function remove($id)
    {
        Product::destroy($id);
        return redirect(route('product.index'));
    }

    public function edit($id)
    {
        $model = Product::find($id);
        $category = Category::all();
        if(!$model) return redirect(route('product.index'));
        return view('admin.product.edit-product', compact('model', 'category'));
    }
    public function saveEdit($id, Request $request)
    {
        $model = Product::find($id);
        $model->name = $request->name;
        $model->price = $request->price;
        $model->sale = $request->sale;
        $model->detail = $request->detail;
        $model->save();
        return redirect(route('product.index'));
    }
}
