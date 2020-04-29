<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {

        $posts = Post::all();
//        $posts =DB::table('posts')->get()

        return view('index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
//        $post = DB::table('posts')->find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
}
