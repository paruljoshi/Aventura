<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cart;
use Validator;

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
    public function deleteitem(Request $request){
    	$validator =Validator::make($request->all(),[
       ]);
       if($validator->fails()){
        return redirect('eventDetails')
                ->withErrors($validator)
                ->withInput();
       }else{
            $itemId = $request->input('rowId');
            Cart::remove($itemId);
            $cart = Cart::content();
            $cartCount = Cart::count();
//            session(['cartCount' => $cartCount]);
    		return view('cart',['cart'=> $cart]);
    	}
    }
}

