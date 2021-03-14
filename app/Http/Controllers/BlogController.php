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
}
