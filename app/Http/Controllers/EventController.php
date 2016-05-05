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
use App\Review;
use App\Report;

class EventController extends Controller
{

    //
    public function index(){
        return view('eventlist');
    }

    public function add(){
        return view('eventadd');
    }

    public function viewreport(){
        $events = DB::table('events')->get();
        return view('eventreport',['events'=>$events, 'status' =>' ']);
    }

    public function savereport(Request $request){
        $validator = Validator::make($request->all(), [
        ]);
        if ($validator->fails()) {
            return redirect('eventreport')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if(Auth::check()){
                $userId = Auth::user()->id;
            }
            $newReport = new Report;
            $newReport->user_id = $userId;
            $newReport->event_id = $request->input('event_name');
            $newReport->description = $request->input('eventDesc');
            $newReport->reason = $request->input('eventReason'); 
            $newReport->status = 'reviewing';
            if($newReport->save()){
                $events = DB::table('events')->get();
                return view('eventreport',['events'=>$events, 'status' =>'Report details added successfully']);
            }else{
                return redirect('eventreport')
                        ->withErrors($validator)
                        ->withInput();
            }

        }
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
            }else{
                return redirect('/home');
            }
            $hours = $request->input('eventHours');
            $minutes = $request->input('eventMinutes');
            $eventAM = $request->input('eventAM');
            if($eventAM == "PM"){
                $hours =12+ $hours;
            }
            $eventTimings = "$hours$minutes";

            $newEvent = new Event;
            $newEvent->name = $request->input('eventName');
            $newEvent->desc = $request->input('eventDesc');
            $newEvent->address = $request->input('eventAddress');
            $newEvent->city = $request->input('eventCity');
            $newEvent->state = $request->input('eventState');
            $newEvent->zipcode = $request->input('eventZipCode');
            $newEvent->country = $request->input('eventCountry');
            $newEvent->ticket = $request->input('eventTicket');
            $newEvent->date = $request->input('eventDate');
            $newEvent->timings = $eventTimings;
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
            $ratingRadio = 'nil';
            $priceRadio = 'nil';
            $dateRadio = 'nil';
            $hoursRadio = 'nil';
            $minutesRadio = 'nil';
            $eventAMradio = 'nil';
            foreach($events as $index => $event){
                if(!empty($request->input('ratings'))){
                    $rating = $request->input('ratings');
                    $dbRating = $event->ratings;
                    $ratingRadio = $rating;
                    if ($dbRating < $rating)
                        unset($events[$index]);
                }
                if(!empty($request->input('price'))){
                    $price = $request->input('price');
                    $dbPrice = $event->ticket;
                    $priceRadio = $price;
                    if ($dbPrice <= $price)
                        unset($events[$index]);
                }
                if(!empty($request->input('date'))){
                    $date = $request->input('date');
                    if($date =="today"){
                        $dateRadio = "today";
                        $getDate = date('Y-m-d');
                    }
                    if($date =="manual"){
                        $getDate = $request->input('manualDate');
                        $dateRadio = $getDate;
                    }
                    $dbDate = $event->timings;
                    if ($dbDate != $getDate)
                        unset($events[$index]);
                }
                if(!empty($request->input('eventAM'))){
                    $hours = $request->input('eventHours');
                    $minutes = $request->input('eventMinutes');
                    $eventAM = $request->input('eventAM');
                    $hoursRadio = $hours;
                    $minutesRadio = $minutes;
                    $eventAMradio = $eventAM;
                    if($eventAM == "PM"){
                        $hours =12+ $hours;
                    }
                    $eventTimings = "$hours$minutes";
                    $dbTimings = $event->timings;
                    $minutesRadio = $minutes;
                    if ($dbTimings != $eventTimings)
                        unset($events[$index]);
                }
                if(!empty($request->input('activity'))){
                    $activity = $request->input('activity');
                    $dbActivity = $event->id;
                    if ($dbActivity != $activity)
                        unset($events[$index]);
                }

            }
                session(['events' => $events, 'ratingRadio' =>$ratingRadio, 'priceRadio' =>$priceRadio, 'dateRadio' =>$dateRadio, 'eventAMradio' => $eventAMradio, 'hoursRadio' => $hoursRadio, 'minutesRadio' => $minutesRadio]);

            if($events){
    			return view('eventlist',['events' => $events,'ratingRadio' => $ratingRadio, 'priceRadio' =>$priceRadio, 'dateRadio' =>$dateRadio, 'hoursRadio' => $hoursRadio, 'minutesRadio' => $minutesRadio, 'eventAMradio' => $eventAMradio]);
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
        $eventReviews = Review::where('event_id', '=', $eventId)->get();
        $reviews = DB::table('reviews')
                    ->where('event_id','=',$eventId)
                    ->count();
        $ratingAvg = DB::table('reviews')
                    ->where('event_id','=',$eventId)
                    ->avg('ratings');
        $eventDetails->reviewCount = $reviews;
        $eventDetails->ratingAvg = floor($ratingAvg);
        if($eventId){
            return view('eventdetail',['eventDetails'=> $eventDetails , 'eventReviews' => $eventReviews, 'status'=> 'None']);
        }

    }
}
