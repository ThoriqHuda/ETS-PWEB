<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //return User::where('name',auth()->user()->name)->get();
        
        return view('dashboard.users.index',[
            'users'=>User::where('name',auth()->user()->name)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         {
            return view('dashboard.users.edit', [
                'id'=> $request->id
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username'=> 'required|max:255',
           'email'=>'required|email',
           'password'=>'required|min:5'
        ]);
        
        $validatedData['password'] = $validatedData['password'];
        $validatedData['name'] = $validatedData['name'];
        $validatedData['username'] = $validatedData['username'];
        $validatedData['email'] = $validatedData['email'];

        User::where('id',auth()->user()->id)
            ->update($validatedData);

        return redirect('/dashboard/user')->with('success','Info Updated');
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
