<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\Event;
use App\Http\Controllers\View;
use DB;
use Illuminate\Support\Facades\Session;
use App\Review;
use App\Http\Controllers\stdClass;


class WelcomeController extends Controller
{
    //
        public function index(){
    	return view('/');
    }

    public function search(Request $request){
		$validator = Validator::make($request->all(), [
            'search' => 'required',
        ]);
		if ($validator->fails()) {
            //redirects to welcome
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
    	}else{
    		//input from user
    		$searchEvent = $request->input('search');
    		$events = DB::table('events')
    					->where('name','LIKE', '%' . $searchEvent . '%')	
    					->get();
            foreach($events as $index => $event){
                $reviews = DB::table('reviews')
                            ->where('event_id','=',$event->id)
                            ->count();
                $event->reviewCount = $reviews;
            }
    		if($events){
    		    Session::put('events',$events);
                return view('eventlist');
    		}else{
    			$message = "Sorry no results found";

    			return redirect('/')
    					->withErrors($message)
                        ->withInput();
    		}
    	}
	}
}
