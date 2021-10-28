<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog',[
            'title'=>'post',
            'data'=>Post::all()
        ]);
    }

    public function show($slug){
        return view('blog_posts',[
            'title'=>'single',
            "post"=>Post::find($slug)
        ]);
    }
}
