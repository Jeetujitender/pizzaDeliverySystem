<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function create(){
        return view('login');
    }

   public function submit(Request $request){
       print_r($request->input());

       $request->validate([
           "userEmail"=>"required",
           "userPassword"=>"min:5 | max:10"
       ]);
   }
   public function store(Request $request){
    print_r($request->input());

    $request->validate([
        "newEmail"=>"required",
        "newPassword"=>"min:5 | max:10",
        "confirmPassword"=>"required | min:5 | max:10 | same:newPassword"
    ]);
}
public function stored(Request $req){
    $email=$req->email;
    $password=$req->password;
    $cpass=$req->cpass;
    
    $p=new \App\signin;
    $p->name="kishor";
    $p->email=$email;
    $p->password=$password;
    $p->save();
    return view("layout.menu");
    
}
}
