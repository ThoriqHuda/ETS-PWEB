<?php

namespace App\Http\Controllers;

use App\Models\DashboardReviews;
use App\Models\Post;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class DashboardReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.review.index',[
            'reviews'=>Post::where('user_id',auth()->user()->id)->get()
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
        return view(('dashboard.review.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData= $request->validate([

            'title'=>'required',
            'body'=>'max:255',
            'star_count'=>'required'
        ]
        );

        $validatedData['user_id']=$request->user_id;
        $validatedData['title']= $request->title;
        $validatedData['body']= $request->body;
        $validatedData['star']= $request->star_count;
        $validatedData['author']= $request->name;

        
        Post::create($validatedData);

        return redirect('/dashboard/review')->with('success','Review sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DashboardReviews  $dashboardReviews
     * @return \Illuminate\Http\Response
     */
    public function show(DashboardReviews $dashboardReviews)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DashboardReviews  $dashboardReviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('dashboard.review.edit', [
            'id'=> $request->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DashboardReviews  $dashboardReviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DashboardReviews $dashboardReviews)
    {
        $validatedData= $request->validate([

            'title'=>'required',
            'body'=>'max:255',
            'star'=>'required'
        ]
        );
        $validatedData['user_id']=$request->user_id;
        $validatedData['title']= $request->title;
        $validatedData['body']= $request->body;
        $validatedData['star']= $request->star;
        $validatedData['author']= $request->name;
        
        Post::where('id',$request->id)
            ->update($validatedData);

        return redirect('/dashboard/review')->with('success','Review sent');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DashboardReviews  $dashboardReviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $validatedData['id']=$request->id;
        Post::destroy($validatedData);

        return redirect('/dashboard/review')->with('deleted','Review deleted');
    
    }
}
