<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class fetchProducts extends Controller
{
        function getData(){

          
            $products = DB::table('products')->select('id','itemname','price')->get();
            return view('layout.menu')->with('products', $products);
             // $p=new \App\product::all($);
             //    return view('layout.menu')->with($p); 
        }

 
}
