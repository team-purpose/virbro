<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Welcome to',
        ];
    	return view('index')->with($data);
    }
}
