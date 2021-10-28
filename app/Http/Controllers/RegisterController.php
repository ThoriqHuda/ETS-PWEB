<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public  function index(){
        return view('register.index', [
            'title'=>'Register'
        ]);
    }

    public function store(Request $request){
         $validatedData = $request->validate([
             'name' => 'required|max:255',
             'username'=> 'required|max:255',
            'email'=>'required|email',
            'password'=>'required|min:5'
         ]);
         $validatedData['password'] = bcrypt($validatedData['password']);
         User::create($validatedData);
         
         return redirect('/login')->with('success','Registration succesful');
    }
}
