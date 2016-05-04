<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    //
    public function index(){
    	$rating = 'nil';
    	return view('cart',['rating'=> $rating]);
    }
    public function rating(Request $request){
    	$rating = $request->input('rating');
    	return view('cart',['rating'=> $rating]);
    }
}
