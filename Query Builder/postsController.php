<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    public function posts()
    {
        return view('posts');
    }

    public function create()
    {

        return view('postss.create');
    }

    public function show()
    {
        $mydata = DB::table('posts')->get();
        return view('postss.show', compact('mydata'));
    }


    public function insert(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return response("Your data are added successfully");
    }
    public function edit($id)
    {
        $myd =DB::table('posts')->get()->where('id',$id)->first();
        return view('postss.edit',compact('myd'));
    }
    public function update(Request $request,$id)
    {
        DB::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect('posts/show');
    }
    public function delete($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('posts/show');
    }
    public function deleteAll()
    {
        DB::table('posts')->truncate();
        return redirect('posts/show');
    }


}

