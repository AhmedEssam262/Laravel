<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    public function posts(){
        return view('posts');
    }

    public function create(){

        return view('postss.create');
    }
    
    public function show(){
        $mydata = DB::table('posts')->get();
        return view('postss.show',compact('mydata'));
    }


    public function insert(Request $request ){
        DB::table('posts')->insert([
            'title'=>$request->title,
                'body'=>$request->body
        ]);
        return response("Your data are added successfully");
    }

