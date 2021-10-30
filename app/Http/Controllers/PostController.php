<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        
        $posts=Post::latest();
        if(request(''))
        if(request('search')){
            $posts->where('title','like','%'. request('search') .'%');
        }
        
        return view('blog',[
            'title'=>'post',
            'data'=>$posts->paginate(7)->withQueryString()
        ]);
    }

    public function old(){

        
        $posts=Post::oldest();
        
        return view('/blog',[
            'title'=>'post',
            'data'=>$posts->paginate(7)->withQueryString()
        ]);
    }

    public function star(){

        
        $posts=Post::orderBy('star','desc');
        
        return view('/blog',[
            'title'=>'post',
            'data'=>$posts->paginate(7)->withQueryString()
        ]);
    }
   
}
