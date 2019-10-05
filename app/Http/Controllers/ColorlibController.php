<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorlibController extends Controller
{

       function index(){

           return view('Colorlib/index');
        }
       function contact(){
           return view('Colorlib/contact');
        }
        function about(){
            return view('Colorlib/about');
        } 
        function product(){
           return view('Colorlib/product');
        }
        function checkout(){
          return view('Colorlib/checkout');
        }
        function product_detail(){
          return view('Colorlib/product_detail');
        }
        function register_user(){
			    return view('Colorlib/register_user');
		}




}
