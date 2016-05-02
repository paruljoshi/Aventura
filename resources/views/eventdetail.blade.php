@extends('layouts.master')

@section('content')
@if($status!='None')
  <p>{{$status}}</p>
@endif
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
              <h4 class="event-summary-ticket-heading">Address : {{$event->street}} {{$event->state}} {{$event->country}}</h4><a href="{{ url('cart') }}" class="w-button event-summary-button">Buy Now</a>
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
          <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
          <a href="{{ url('cart') }}" class="w-button event-details-button">Buy Now</a>
      </div>
    </div>
    
    <div class="w-section event-add-review-section">
      <div class="event-add-review-div">
        <h1 class="event-details-heading">Share your adventure</h1>
        <div class="w-form">
          <form id="wf-form-review-form" name="wf-form-review-form" data-name="review-form" class="w-clearfix" action="/savereview" method="post">
            <label for="name">Your rating</label>
            <input id="name" type="text" placeholder="Enter your name" name="rating" data-name="Name" class="w-input">
            <label for="review">Your experience</label>
            <textarea id="review" type="text" placeholder="Please write at least 100 lines about your experience for this adventure" name="review" data-name="review" required="required" class="w-input"></textarea>
            <input type="submit" value="Submit Review" data-wait="Please wait..." class="w-button event-details-button">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="event_id" value = "{{$event->id}}" ></input>
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
    @endforeach
    @endif

    <div class="w-section event-view-review-section">
      <div class="event-details-view-review">
        <h1 class="event-details-heading">Reviews</h1>
        @if($eventReviews)
        @foreach($eventReviews as $review)
        <div class="event-details-user-review"><img src="images/reviewStars5.png">
          <h4>By: {{$review->user_name}}       On: {{$review->date}}</h4>
          <p>
          {{$review->desc}}
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        </div>
        _ _ _ _ _ _ _ _ _ _ _ _ _
        @endforeach
        @endif
      </div>
    </div>
    <div class="w-section event-map-section">
      <div data-widget-latlng="51.511214,-0.119824" data-widget-style="roadmap" data-widget-zoom="12" class="w-widget w-widget-map events-map"></div>
    </div>
  </div>

  @endsection