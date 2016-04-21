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
            //'ratings' => 'required',
        ]);
		if ($validator->fails()) {
            return redirect('event')
                        ->withErrors($validator)
                        ->withInput();
    	}else{
    		//input from user
            
            //if(input('price')!= '')
            //    $price = $request->input('price');

            $events = Session::get('events');

            foreach($events as $index => $event){
                if(!empty($request->input('ratings'))){
                    $rating = $request->input('ratings');
                    $dbRating = $event->ratings;
                    if ($dbRating != $rating)
                        unset($events[$index]);
                }
                if(!empty($request->input('price'))){
                    $price = $request->input('price');
                    $dbPrice = $event->ticket;
                    if ($dbPrice < $price)
                        unset($events[$index]);
                }
                // clear out the date and time 
                if(!empty($request->input('date'))){
                    $date = $request->input('date');
                    $dbDate = $event->timings;
                    if ($dbDate != $date)
                        unset($events[$index]);
                }
                if(!empty($request->input('activity'))){
                    $activity = $request->input('activity');
                    $dbActivity = $event->name;
                    if ($dbActivity != $activity)
                        unset($events[$index]);
                }
            }
                session(['events' => $events]);

            if($events){
    			return view('event',['events' => $events]);
    		}else{
    			$message = "Sorry no results found !!";

    			return redirect('event')
    					->withErrors($message)
                        ->withInput();
    		}
    	}
    }
}
