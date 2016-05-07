<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cart;

class CartController extends Controller
{
    //
    public function index(){
    	$cart = Cart::content();
    	return view('cart',['cart'=> $cart]);
    }
    public function rating(Request $request){
    	$rating = $request->input('rating');
    	return view('cart',['rating'=> $rating]);
    }
}
