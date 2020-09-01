<?php

namespace App\Http\Controllers;


use App\forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::paginate(5); 
        return view("forum.index",compact('forums'));
    }

    
   
    public function create()
    {
      return view("forum.create"); 
    }
   


    public function store(Request $request)
    {
        
        $title=request('title');
        $description=request('description');
        $image=request('image');
        $str_slug=request('str_slug');
        $forums = new Forum;
        $forums->title=$title;
        $forums->str_slug= str_slug($title);
        $forums->description=$description;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('image',$filename);
            $forums->image=$filename;
        }
        $forums->save();
        
        return redirect('forums');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show($str_slug)
    {
        $forums = Forum::where('id',$str_slug)->orWhere('str_slug',$str_slug)->first();
        return view('forum.show',compact('forums'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(forum $forum)
    {
        //
    }
}
