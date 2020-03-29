<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class order extends Controller
{
    function placeorder(Request $req){
        $lastorderid;
        $name=$req->name;
        $address=$req->address;
        $phone=$req->phone;
        $orderidarr=DB::table('orders')->select(DB::raw("MAX(orderid) as lastid"))->get();
        $products = DB::table('temporders')->select('name','price','quantity','amount')->get();
        
        // $lastorderid=$orderidarr->lastid;
        
        $p=new \App\order;
        foreach($products as $product){

            $p->name=$name;
            $p->item=$product->name;
            $p->price=$product->price;
            $p->quantity=$product->quantity;
            $p->amount=$product->amount;
            $p->address=$address;
            $p->phone=$phone;
            // $p->orderid=$lastorderid+1;
            $p->save();

        }
        // return "sucess";
        return $orderidarr;
    }
}
