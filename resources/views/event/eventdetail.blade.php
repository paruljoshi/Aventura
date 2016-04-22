@extends('layouts.master')

@section('content')
  <div class="event-detail-div">
    <div class="w-section event-summary-section">
      <div class="event-summary-background-div">
        <div class="w-row event-summary-row">
          <div class="w-col w-col-6 event-summary-col1">
            <div data-animation="slide" data-duration="500" data-infinite="1" data-delay="4000" data-autoplay="1" class="w-slider event-summary-img-slider">
              <div class="w-slider-mask">
                <div class="w-slide event-summary-img1"></div>
                <div class="w-slide event-summary-img2"></div>
                <div class="w-slide event-summary-img3"></div>
              </div>
              <div class="w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
              </div>
              <div class="w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
              </div>
              <div class="w-slider-nav w-round"></div>
            </div>
          </div>
          @if($eventDetails)
		@foreach($eventDetails as $event)
          <div class="w-col w-col-6 event-summary-col2">
            <div class="event-summary-details-div">
              <h1 class="event-summary-heading">{{$event->name}}</h1>
              <div class="event-summary-rating-review-div"><img src="images/reviewStars2.png" class="event-summary-rating-img">
                <h4 class="event-summary-rating-review">{{$event->ratings}} Reviews</h4>
              </div>
              <h4 class="event-summary-ticket-heading">Ticket Price: {{$event->ticket}}</h4>
              <h4 class="event-summary-ticket-heading">Timings: {{$event->timings}} </h4>
              <h4 class="event-summary-ticket-heading">Address : {{$event->street}} {{$event->state}} {{$event->country}}</h4><a href="#" class="w-button event-summary-button">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-section event-details-section">
      <div class="w-clearfix event-details-div">
        <h1 class="event-details-heading">Overview</h1>
        <p class="event-details-description">
        {{$event-> desc}}
          <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
          <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p><a href="#" class="w-button event-details-button">Buy Now</a>
      </div>
    </div>
    @endforeach
	@endif
    <div class="w-section event-add-review-section">
      <div class="event-add-review-div">
        <h1 class="event-details-heading">Share your adventure</h1>
        <div class="w-form">
          <form id="wf-form-review-form" name="wf-form-review-form" data-name="review-form" class="w-clearfix">
            <label for="name">Your rating</label>
            <input id="name" type="text" placeholder="Enter your name" name="name" data-name="Name" class="w-input">
            <label for="review">Your experience</label>
            <input id="review" type="email" placeholder="Please write at least 100 lines about your experience for this adventure" name="review" data-name="review" required="required" class="w-input">
            <input type="submit" value="Submit Review" data-wait="Please wait..." class="w-button event-details-button">
          </form>
          <div class="w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form</p>
          </div>
        </div>
      </div>
    </div>
    <div class="w-section event-view-review-section">
      <div class="event-details-view-review">
        <h1 class="event-details-heading">Reviews</h1>
        <div class="event-details-user-review"><img src="images/reviewStars5.png">
          <h4>By abc</h4>
          <h4>On :date</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        </div>
      </div>
    </div>
    <div class="w-section event-map-section">
      <div data-widget-latlng="51.511214,-0.119824" data-widget-style="roadmap" data-widget-zoom="12" class="w-widget w-widget-map events-map"></div>
    </div>
  </div>
@endsection
<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@if($event_id)
{{$event_id}}
@endif
@if($eventDetails)
@foreach($eventDetails as $event)
{{$event->name}}
@endforeach
@endif

</body>
</html>
-->