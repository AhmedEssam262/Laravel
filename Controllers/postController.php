<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function showUsers(){
        return "Name: Ahmed Essam <br><br>
        id: 1808787<br><br>
        Age: 22";
    }
    public function  showGrades(){
        return '<h1>The total GPA Is 2.72</h1>';
    }

    public function  showUpdate()
    {
        return '<h1>Hello you can update your data</h1>';
    }
    public function  showInsert(){
        return '<h1>Hello you can insert your data</h1>';
    }
    public function  showDelete(){
        return '<h1>Hello you can delete your data</h1>';
    }
}
