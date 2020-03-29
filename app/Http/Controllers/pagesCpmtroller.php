<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesCpmtroller extends Controller
{
    public function index(){
        
        return view("pages.about");
    }
    public function services(){
        $title="passing value to blade template";
        return view('pages.services')->with('title',$title);
    }
}
