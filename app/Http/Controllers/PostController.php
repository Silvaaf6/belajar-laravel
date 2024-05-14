<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Produk;

class PostController extends Controller
{
    public function menampilkan()
    {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    public function show($id){
        $posts = Post::findOrFail($id);
        return view('posts/show', compact('posts'));
    }

    
    
}
