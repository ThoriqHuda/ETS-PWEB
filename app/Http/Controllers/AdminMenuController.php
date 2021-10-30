<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        //$this->authorize('admin');
        return view('dashboard.menu.index',[
            'reviews'=>Menu::all()
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(('dashboard.menu.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
       
        $validatedData['title']= $request->name;
        $validatedData['description']= $request->description;
        $validatedData['price']= $request->price;

        
        Menu::create($validatedData);

        return redirect('/dashboard/menu')->with('success','Menu Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('dashboard.menu.edit', [
            'id'=> $request->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        
        $validatedData['title']= $request->name;
        $validatedData['description']= $request->description;
        $validatedData['price']= $request->price;
        
        Menu::where('id',$request->id)
            ->update($validatedData);

        return redirect('/dashboard/menu')->with('success','Review sent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
