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
                $ratingAvg = DB::table('reviews')
                        ->where('event_id','=',$event->id)
                        ->avg('ratings');
                $event->reviewCount = $reviews;
                $event->ratingAvg = floor($ratingAvg);
            }
            $ratingRadio ='0';
            $priceRadio ='nil';
            $dateRadio ='nil';
            $hoursRadio = 'nil';
            $minutesRadio = 'nil';
            $eventAMradio = 'nil';
            $hoursRadio = 'nil';
            $minutesRadio = 'nil';
    		if($events){
    		    //Session::put('events',$events);
                //Session::put('ratingsList','0');
                session(['events' => $events, 'ratingRadio' =>$ratingRadio, 'priceRadio' =>$priceRadio, 'dateRadio' =>$dateRadio, 'eventAMradio' => $eventAMradio, 'hoursRadio' => $hoursRadio, 'minutesRadio' => $minutesRadio]);

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
