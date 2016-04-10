<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\Http\Controllers\View;
use DB;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    //
    public function index(){
    	return view('event');
    }

    public function filter(Request $request){

		$validator = Validator::make($request->all(), [
            'ratings' => 'required',
        ]);
		if ($validator->fails()) {
            return redirect('event')
                        ->withErrors($validator)
                        ->withInput();
    	}else{
    		//input from user
    		$rating = $request->input('ratings');

            $events = Session::get('events');

            foreach($events as $index => $event){
                $dbRating = $event->ratings;
                if ($dbRating != $rating)
                    unset($events[$index]);
            }
                session(['events' => $events]);

            if($events){
    			return view('event',['events' => $events]);
    		}else{
    			$message = "Sorry no results found";

    			return redirect('event')
    					->withErrors($message)
                        ->withInput();
    		}
    	}
    }
}
