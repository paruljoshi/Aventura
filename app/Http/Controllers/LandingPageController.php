<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\Http\Controllers\View;
use DB;
use Illuminate\Support\Facades\Session;

class LandingPageController extends Controller
{
    //
    public function index(){
    	return view('landingpage');
    }

    public function search(Request $request){
		$validator = Validator::make($request->all(), [
            'search' => 'required',
        ]);
		if ($validator->fails()) {
            return redirect('landingpage')
                        ->withErrors($validator)
                        ->withInput();
    	}else{
    		//input from user
    		$searchEvent = $request->input('search');
    		$events = DB::table('events')
    					->where('name','LIKE', '%' . $searchEvent . '%')	
    					->get();
    		if($events){
    		    Session::put('events',$events);
                return view('event');
    		}else{
    			$message = "Sorry no results found";

    			return redirect('landingpage')
    					->withErrors($message)
                        ->withInput();
    		}
    	}
	}
}
