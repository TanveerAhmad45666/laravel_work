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

Route::get('/', function () {
    return view('welcome');
});



 Route::get("/","ColorlibController@index");
Route::get("contact","ColorlibController@contact");
Route::get("about","ColorlibController@about");
Route::get("product","ColorlibController@product");
Route::get("checkout","ColorlibController@checkout");
Route::get("product_detail","ColorlibController@product_detail");





Route::get("register_user","registerController@register_user");//its form for register
Route::post('register_add','registerController@add');//add usr when its open register form
Route::get("register_list","registerController@register_list"); //list of regitster user
Route::get("register_login","registerController@register_login");//its login form


/////////////////////////////
	/// Session //////
	////////////
Route::get("login","SessionController@login");
Route::post("do_login","SessionController@do_login");
Route::get("logout","SessionController@logout");