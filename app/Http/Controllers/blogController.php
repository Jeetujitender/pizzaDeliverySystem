<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function show(){
        return view('blog');
    }
}
