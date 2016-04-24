<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\Http\Controllers\View;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    //
    public function index(){
        return view('eventlist');
    }

    public function add(){
        return view('eventadd');
    }

    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'eventName' => 'required',
            'eventDesc' => 'required',
            'eventCountry' => 'required',
            'eventTicket' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('eventadd')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if(Auth::check()){
                $userId = Auth::user()->id;
            }
            $newEvent = new Event;
            $newEvent->name = $request->input('eventName');
            $newEvent->desc = $request->input('eventDesc');
            $newEvent->country = $request->input('eventCountry');
            $newEvent->ticket = $request->input('eventTicket');
            $newEvent->user_id = $userId;
            if($newEvent->save()){
                return redirect('eventadd')->with('status', 'Event added successfully!');
            }else{
                return redirect('eventadd')
                        ->withErrors($validator)
                        ->withInput();
            }
        }
    }

    public function filter(Request $request){
		$validator = Validator::make($request->all(), [
            //'ratings' => 'required',
        ]);
		if ($validator->fails()) {
            return redirect('eventlist')
                        ->withErrors($validator)
                        ->withInput();
    	}else{
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
    			return view('eventlist',['events' => $events]);
    		}else{
    			$message = "Sorry no results found !!";

    			return redirect('eventlist')
    					->withErrors($message)
                        ->withInput();
    		}
    	}
    }

    public function detail(Request $request){
        $eventId = $request->input('event_id');
        $eventDetails = Event::where('id', '=',$eventId)->get();
        if($eventId){
            return view('eventdetail',['event_id' => $eventId, 'eventDetails'=> $eventDetails]);
        }

    }
}
