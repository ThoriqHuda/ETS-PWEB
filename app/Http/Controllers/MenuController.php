<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){

        
        $posts=Menu::latest();
        if(request('search')){
            $posts->where('title','like','%'. request('search') .'%');
        }
        
        return view('menu',[
            'title'=>'menu',
            'data'=>$posts->paginate(7)->withQueryString()
        ]);
    }

    public function price(){

        
        $posts=Menu::orderBy('price');
      
        return view('menu',[
            'title'=>'menu',
            'data'=>$posts->paginate(7)->withQueryString()
        ]);
    }
}
