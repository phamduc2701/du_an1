<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }
    public function add()
    {
        return view('admin.post.add-post');
    }
    public function saveAdd(Request $request)
    {
        $model = new Post();
        $model->name = $request->name;
        $model->content = $request->content;
        $model->date = $request->date;

        if($request->hasFile('image')) {
            $fileName = uniqid() . '_' . $request->image->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            $model->image =  "storage/" . $filePath;
        }
        $model->save();
        return redirect(route('post.index'));
    }
    public function remove($id)
    {
        Post::destroy($id);
        return redirect(route('post.index'));
    }
}
