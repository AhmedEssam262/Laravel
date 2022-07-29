<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mydata=Post::all();
        //$mydata=Post::get();
        return view('posts.index',compact('mydata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'author'=>$request->author
        ]);
        return redirect()->route('posts.index');

//        $sql = new Post();
//        $sql->title = $request->title;
//        $sql->author = $request->author;
//        $sql->body = $request->body;
//        $sql->created_at = "24-7-2022";
//        $sql->updated_at = "24-7-2022";
//        $sql->save();
//        return response("Post is created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $softdeleted = Post::onlyTrashed()->get();
        return view('posts.history',compact('softdeleted'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $data=Post::findorfail($id);
        $data=Post::where('id',$id)->first();
        return view('posts.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mydata=Post::findorfail($id);
        $mydata->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'body'=>$request->body,
        ]);
//        $mydata->title=$request->title;
//        $mydata->author=$request->author;
//        $mydata->body=$request->body;
//        $mydata->save();
          return redirect()->route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$del=Post::findorfail($id)->delete();
        $del=Post::destroy($id);
        return redirect()->route('posts.index');
    }
    public function restore($id)
    {
        $softdeleted = Post::withTrashed()->where('id',$id)->restore();

        return redirect()->back();
    }
    public function forceDelete($id)
    {
        $softdeleted = Post::withTrashed()->where('id',$id)->forceDelete();

        return redirect()->back();
    }
}
