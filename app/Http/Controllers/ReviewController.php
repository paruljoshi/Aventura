<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\View;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\Event;
use Validator;

class ReviewController extends Controller
{
    //
    public function savereview(Request $request){
        $validator = Validator::make($request->all(), [
            'rating' => 'required',
            'review' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('eventdetail')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if(Auth::check()){
                $userId = Auth::user()->id;
                $userName =Auth::user()->name;
            }else{
            	return redirect('/home');
            }
            $newReview = new Review;
            $newReview->ratings = $request->input('rating');
            $newReview->desc = $request->input('review');
            $newReview->date = date('Y-m-d');
            $newReview->user_name = $userName;
            $newReview->user_id = $userId;
            $newReview->event_id = $request->input('event_id');
            if($newReview->save()){
            //    return redirect('eventdetail')->with('status', 'Event added successfully!');
            $eventDetails = Event::where('id', '=',$request->input('event_id'))->get();
            $eventReviews = Review::where('event_id', '=', $request->input('event_id'))->get();
        
            return view('eventdetail',['eventDetails'=> $eventDetails , 'eventReviews' => $eventReviews, 'status'=> 'Review saved successfully!']);
            }else{

                return redirect('eventdetail')
                        ->withErrors($validator)
                        ->withInput();
            }
        }
    }
}
