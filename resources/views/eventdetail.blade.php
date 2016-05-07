<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

     <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/aventura.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:300,regular,500"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
    
</head>
<div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation-bar">
    <div class="w-container nav-bar-links-container">
     <a href="{{ url('/') }}" class="w-nav-brand brand-link"><h1 class="brand-text" style="margin-left: 80px;">Aventura</h1></a>
       <nav role="navigation" class="w-nav-menu w-clearfix navigation-menu">
            @if (Auth::guest())
              <a href="index.html" class="w-nav-link navigation-link">&nbsp;Help</a>
              <a href="{{ url('/login') }}" class="w-nav-link navigation-link">Log In</a>
              <a href="{{ url('/register') }}" class="w-nav-link navigation-link">Sign Up</a>
              <a href="{{ url('cart') }}" class="w-nav-link navigation-link cart">
                @if(Session::has('cartCount'))
                {{Session::get('cartCount')}}
                @endif
              </a>

            @else
              <a href="{{ url('eventadd') }}" class="w-button event-details-button" style="height: 60px; padding-top: 20px; width: 140px; border-radius: 0px;"><img src="images/plus_icon.png" style="height: 20px;width: 30px; padding-right: 10px; " >Add Event</a>
              <a href="index.html" class="w-nav-link navigation-link">&nbsp;Help</a>
              <a href="{{ url('cart') }}" class="w-nav-link navigation-link cart">
                @if(Session::has('cartCount'))
                {{Session::get('cartCount')}}
                @endif
              </a>
              <!-- Authentication Links -->
              <div data-delay="0" data-hover="1" class="w-dropdown">
          <div class="w-dropdown-toggle" style="height: 40px; padding-top: 20px; width: 140px;">
            <p style="margin-top: -10px; font-size: 15px; font-weight: 400; color: #337ab7;">{{ Auth::user()->name }}</p>
            <div class="w-icon-dropdown-toggle"></div>
          </div>
          <nav class="w-dropdown-list">
            <a href="{{ url('eventadd') }}" class="w-dropdown-link nav-dropdown-link">Add Event</a>
            <a href="{{ url('viewreport') }}" class="w-dropdown-link nav-dropdown-link">Report Event</a>
            <a href="{{ url('cart') }}" class="w-dropdown-link nav-dropdown-link">View Orders</a>
            <a href="{{ url('/logout') }}" class="w-dropdown-link nav-dropdown-link">Log Out</a>
          </nav>
        </div>
            @endif
        </nav>
      <div class="w-nav-button hamburger-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
<body>

@if($status!='None')
  <p style="margin-left: 80px;">{{$status}}</p>
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
              <div class="event-summary-rating-review-div">
                @if($eventDetails->ratingAvg == 0)
                @elseif($eventDetails->ratingAvg == 1)
                  <img src="images/1AvgReview.png" style="height: 25px; width: 35px;">
                @elseif($eventDetails->ratingAvg == 2)
                  <img src="images/2AvgReview.png" style="height: 30px; width: 100px;">
                @elseif($eventDetails->ratingAvg == 3)
                  <img src="images/3AvgReview.png" style="height: 25px; width: 70px;">
                @elseif($eventDetails->ratingAvg == 4)
                  <img src="images/4AvgReview.png" style="height: 29px; width: 100px;">
                @elseif($eventDetails->ratingAvg == 5)
                  <img src="images/5ReviewStars.png" style="height: 30px; width: 100px;">
                @endif
                <h4 class="event-summary-rating-review">{{$eventDetails->reviewCount}} Reviews</h4>
              </div>
              <h4 class="event-summary-ticket-heading">Ticket Price: {{$event->ticket}}</h4>
              <h4 class="event-summary-ticket-heading">Timings: {{$event->timings}} </h4>
              <h4 class="event-summary-ticket-heading">Address : {{$event->street}} {{$event->state}} {{$event->country}}</h4>
              <form action="/savetocart" method="post">
                <input type="hidden" name="event_id" value="{{$event->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="w-button event-summary-button" type="submit" value="Add To Cart" style="width: 120px;"></input>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-section event-details-section">
      <div class="w-clearfix event-details-div">
        <h1 class="event-details-heading">Overview</h1>
        <p class="event-details-description">
          <p>{{$event-> desc}}</p>
      </div>
    </div>
    
    <div class="w-section event-add-review-section">
      <div class="event-add-review-div">
        <h1 class="event-details-heading">Share your adventure</h1>
        <div class="w-form">
          <form id="wf-form-review-form" name="wf-form-review-form" data-name="review-form" class="w-clearfix" action="/savereview" method="post">
            <label for="name">Your rating</label>
            <div class="row lead" style="margin-left: 5px; color: #3898EC;">
            <div id="stars" class="starrr" ></div>
            <input type="hidden" name="rating" id="ratings-hidden">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>            
            <label for="review">Your experience</label>
            <textarea id="review" type="text" placeholder="Please write at least 100 lines about your experience for this adventure" name="review" data-name="review" required="required" class="w-input"></textarea>
            <input type="submit" value="Submit Review" data-wait="Please wait..." class="w-button event-details-button">
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
        <div class="event-details-user-review">
        @if($review->ratings == 0)
          <img src="images/0ReviewStars.png" style="height: 30px; width: 100px;">
        @elseif($review->ratings == 1)
          <img src="images/1ReviewStars.png" style="height: 26px; width: 100px;">
        @elseif($review->ratings == 2)
          <img src="images/2ReviewStars.png" style="height: 30px; width: 100px;">
        @elseif($review->ratings == 3)
          <img src="images/3ReviewStars.png" style="height: 30px; width: 100px;">
        @elseif($review->ratings == 4)
          <img src="images/4ReviewStars.png" style="height: 30px; width: 100px;">
        @elseif($review->ratings == 5)
          <img src="images/5ReviewStars.png" style="height: 30px; width: 100px;">
        @endif
          <h4>By: {{$review->user_name}}       On: {{$review->date}}</h4>
          <p>{{$review->desc}}</p>
        </div>
        _ _ _ _ _ _ _ _ _ _ _ _ _
        @endforeach
        @endif
      </div>
    </div>
    <div class="w-section event-map-section">
    <h1 class="event-details-heading">Location</h1>
    <br>
      <div data-widget-latlng="51.511214,-0.119824" data-widget-style="roadmap" data-widget-zoom="12" class="w-widget w-widget-map events-map"></div>
    </div>
  </div>

<div class="w-section footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 spc">
          <h5>about Aventura</h5>
          <p>Aventura is designed to solve the problem of tedious search on adventurous activities online. This application helps user to locate nearby activities, paid or free one's too.</p>
        </div>
        <div class="w-col w-col-4 spc">
          <h5>useful links</h5><a href="{{ url('home') }}" class="footer-link">Your Account</a><a href="{{ url('cart') }}" class="footer-link">Your Orders</a><a href="#" class="footer-link">Shipping and Rental Rates and Policies</a><a href="{{ url('home') }}" class="footer-link">Manage your Profile</a>
        </div>
        <div class="w-col w-col-4">
          <h5>social</h5>
          <div class="w-clearfix footer-link-wrapper"><img width="20" src="images/social-18.svg" class="info-icon"><a href="#" class="footer-link with-icon">Twitter</a>
          </div>
          <div class="w-clearfix footer-link-wrapper"><img width="20" src="images/social-03.svg" class="info-icon"><a href="#" class="footer-link with-icon">Facebook</a>
          </div>
          <div class="w-clearfix footer-link-wrapper"><img width="20" src="images/social-11.svg" class="info-icon"><a href="#" class="footer-link with-icon">Pinterest</a>
          </div>
          <div class="w-clearfix footer-link-wrapper"><img width="20" src="images/social-06.svg" class="info-icon"><a href="#" class="footer-link with-icon">Google</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section footer center">
    <div class="w-container">
      <div class="footer-text">Copyright © Aventura 2016</div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script type="text/javascript">
// Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {
  var ratingsField = $('#ratings-hidden');
      
  $('#stars').on('starrr:change', function(e, value){
    $('#count').html(value);
    ratingsField.val(value);
  });
  
  $('#stars-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});
</script>
  </body>
  </html>
