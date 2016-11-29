<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = ['name' => 'nithya', 'email' => 'nithya@humber.ca'];
        $id = 4;
        //$name = "Nithya";
        return view('welcome')->with('data', $data)
                              ->with('id',4);
        return view('welcome', ['data' => $data, 'id' => 4]);

        return view('welcome', compact('data', 'id'));
    }
}
