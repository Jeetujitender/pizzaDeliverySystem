<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\fetchProducts;
use Illuminate\Http\Request;
use DB;

class placeOrder extends Controller
{
    function itemdata(){
        $total=DB::table('temporders')->select(DB::raw("sum(amount) as sum"))->get();
        $products = DB::table('temporders')->select('name','price','quantity','amount')->get();
        
        return view('layout.cart')->with('total', $total)->with('products',$products);
        

    }

        function addOrder(Request $re){
        $item=$re->name;
        $price=$re->price;
        $quantity=$re->quantity;
        // $order=array('item'=>$item,'price'=>$price,'quantity'=>$quantity);
        $p=new \App\temporder;
        $p->name=$item;
        $p->price=$price;
        $p->quantity=$quantity;
        $p->amount=$quantity*$price;
        $p->save();
        $result=(new fetchProducts)->getData();
        return $result;

    }
    
}
