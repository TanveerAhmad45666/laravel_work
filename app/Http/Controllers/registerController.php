<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\register;
class registerController extends Controller
{
    //
    
    // public function create(){
    //     return view('devices.create');
    // }

     
    // public function register(){
 
    //     $register = new register();
 
    //     $register->name = request('name');
    //     $register->description = request('description');
 
    //     $device->save();
 
    //     return redirect('Colorlib/register_user');
 
    // }

    function register_user()
    {	 
        if(session("username"))
        {
             return view('Colorlib/register_user');
               // return view('Colorlib/register_list');
        }
        else
        {
            return redirect("/register_login");
              // return redirect("register_user");
             // return redirect('Colorlib/register_user');
        }

//API //
    //	$register = new ShopModel();
    	//echo json_encode($register->get());
    	// return view("Shop.register_form");

    	// return view('Colorlib/register_user');
    }

    function register_login()
    {   
//API //
    //  $register = new ShopModel();
        //echo json_encode($register->get());
        // return view("Shop.register_form");

        return view('Colorlib/login');
    }



    function add(Request $request)
    {
        // $request->validate(['name' => 'required']);
    	$register = new register();
        $register->first_name = request('first_name');
    
    	$register->last_name= request('last_name');
    	$register->email= request('email');
    	$register->address=request('address');
    	$register->city=request('city') ;
    	$register->country=request('country');
    	$register->zip_code=request('zip_code');
        $register->telephone=request('telephone');
        $register->password= request('password');
    	
    	$register->save();
    	return redirect('register_list');
    }
     function register_list()
    {

        if(session("username"))
        {
             
             $user = new register();
             $list = $user->get();
             return view("Colorlib/register_list",['data' => $list]);
        }
        else
        {
            return view('Colorlib/register_user');
 
        }
    	

    }






}
