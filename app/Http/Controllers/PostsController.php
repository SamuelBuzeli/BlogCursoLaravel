<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(){
        $posts = \App\Models\Post::all();

        return view('posts.index',compact('posts'));
    }
}
