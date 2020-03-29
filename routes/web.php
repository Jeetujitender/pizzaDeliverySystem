<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/blog', 'blogController@show');
Route::get('/form','LoginController@create');
Route::post('/stored','LoginController@stored');


Route::get('/cart','placeOrder@itemdata');
Route::get('/menu','fetchProducts@getData');
Route::post('/menu','placeOrder@addOrder');
Route::post('/order','order@placeorder');



Route::get('/home',function(){
    return view("layout.aboutus");
});

