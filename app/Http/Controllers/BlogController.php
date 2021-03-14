<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $index = Post::all();

        return view('blog.index')->with(['index' => $index]);
    }

    public function store(Request $request) {
        Post::create([
            'title' => $request->title,
            'body' => $request ->body
        ]);

        return back();

    }

    public function get_user($id) {
        $index = Post::find($id);

        if($index == null)
            return response(['message' => 'user not found'],404);

    
        return view('blog.detail')->with(['index' => $index]);
    }
}
