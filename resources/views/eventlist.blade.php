@extends('layouts.master')

@section('content')
  <script>
  var j = jQuery.noConflict();
  j(document).ready(function(){
    j('#datepicker').datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
  <script type="text/javascript">
  $('input[name=paid]').change(function(){
     $('form').submit();
  });
  </script>
  <div class="w-row search-column">
    <div class="w-col w-col-3 search-column">
      <div class="w-form search-option-form">
        <form id="wf-form-search-options" name="wf-form-search-options" action="/filter" method="post" data-name="search-options" class="search-option-form">
          <div class="activity-option">
            <label for="name">Activities :</label>
            @if(Session::has('events'))
            @foreach(Session::get('events') as $event)
            <div class="w-radio">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="event_id" value = "{{$event->id}}" ></input>
              <input id="radio" type="radio" name="activity" data-name="Radio" value ="{{$event->id}}" onchange="this.form.submit();"  class="w-radio-input" >
              <label for="radio" class="w-form-label">{{$event->name}}</label>
            </div>
            @endforeach
            @endif
          </div>
          <div class="activity-option">
            <label class="price-option">Price :</label>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="0" onchange="this.form.submit();" data-name="Radio" class="w-radio-input" <?php if(Session::get('priceRadio')=="0") echo "checked"; ?>>
              <label for="radio" class="w-form-label">0</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="50" onchange="this.form.submit();" data-name="Radio" class="w-radio-input" <?php if(Session::get('priceRadio')=="50") echo "checked"; ?>>
              <label for="radio" class="w-form-label">0 - 50</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="150" onchange="this.form.submit();" data-name="Radio" class="w-radio-input" <?php if(Session::get('priceRadio')=="150") echo "checked"; ?>>
              <label for="radio" class="w-form-label">50 - 150</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="300" onchange="this.form.submit();" data-name="Radio" class="w-radio-input" <?php if(Session::get('priceRadio')=="300") echo "checked"; ?>>
              <label for="radio" class="w-form-label">150 - 300</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="301" onchange="this.form.submit();" data-name="Radio" class="w-radio-input" <?php if(Session::get('priceRadio')=="301") echo "checked"; ?>>
              <label for="radio" class="w-form-label">300 above</label>
            </div>
          </div>
          <div class="activity-option">
            <label>Ratings :</label>
            <div class="w-radio">
              <input id="5Stars" type="radio" name="ratings" data-name="5Stars"  class="w-radio-input" onchange="this.form.submit();" value ="5" <?php if(Session::get('ratingRadio')=="5") echo "checked"; ?>><img src="images/reviewStars5.png">
              <label for="radio-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
            <div class="w-radio">
              <input id="4Stars-4" type="radio" name="ratings" data-name="4Stars" class="w-radio-input"  onchange="this.form.submit();" value="4" <?php if(Session::get('ratingRadio')=="4") echo "checked"; ?>><img src="images/reviewStars4.png">
              <label for="radio-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
            <div class="w-radio">
              <input id="3Stars" type="radio" name="ratings" data-name="3Stars" class="w-radio-input"  onchange="this.form.submit();" value="3" <?php if(Session::get('ratingRadio')=="3") echo "checked"; ?>><img src="images/reviewStars3.png">
              <label for="radio-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
            <div class="w-radio">
              <input id="2Stars" type="radio" name="ratings" data-name="2Stars" class="w-radio-input"  onchange="this.form.submit();" value="2" <?php if(Session::get('ratingRadio')=="2") echo "checked"; ?>><img src="images/reviewStars2.png">
              <label for="radio-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
         </div>
          <div class="activity-option">
            <label>Day :</label>
            <div class="w-radio">
              <input id="radio-2" type="radio" name="date" value="today" onchange="this.form.submit();" data-name="Radio 2" class="w-radio-input" <?php if(Session::get('dateRadio')=="today") echo "checked"; ?>>
              <label for="radio-2" class="w-form-label">Today</label>
            </div>
            <div class="w-radio w-clearfix">
              <input id="radio-2" type="radio" name="date" value="manual"  data-name="Radio 2" class="w-radio-input" <?php if(Session::get('dateRadio')!="today" && Session::get('dateRadio')!=" " && Session::get('dateRadio')!=" nil") echo "checked"; ?>>
              <label for="radio-2" class="w-form-label">Select a Date : </label>
              <input type="text" id="datepicker" name="manualDate" placeholder="Select date" onchange="this.form.submit();" value="<?php 
              $date= Session::get('dateRadio'); 
              if($date!="today" && $date != " " && $date !='nil')
                {echo $date;}
              ?>
              ">
            </div>
          </div>
          <div class="activity-option">
            <label>Timings :</label>
            <select>
                <option value="0"> </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <select>
                <option value="0"></option>
                <option value="00">00</option>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>
              </select>
              <select>
                <option value="AM">AM</option>
                <option value="PM">PM</option>
              </select> To 
            <select>
                <option value="0"> </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <select>
                <option value="0"></option>
                <option value="00">00</option>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>
              </select>
              <select>
                <option value="AM">AM</option>
                <option value="PM">PM</option>
              </select>
              <label>   </label>
          </div>
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
    </div>
    <div class="w-col w-col-9 map-column">
      <div data-widget-latlng="51.511214,-0.119824" data-widget-style="roadmap" data-widget-zoom="12" class="w-widget w-widget-map map-column"></div>
      <div class="w-section section-subheading">
        <h2 class="search-results-are">Search results are:</h2>
      </div>
      <div class="w-section adventure-item">
       @if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
      @endif
      @if(Session::has('events'))
      @foreach(Session::get('events') as $event)
        <div class="adventure-item-div" >
        <form action ="/eventdetail" method="post" name = "event-detail">
          <h1 class="event-heading">{{ str_limit($event->name, $limit = 18, $end = '...')}}</h1>
          <div class="w-row">
            <div class="w-col w-col-6 reviews">{{ $event->ratings }} <img src="images/reviewStars3.png">
            </div>
            <div class="w-col w-col-6">
            <div class="reviews">
              <input type="submit" value="{{$event->reviewCount}} Reviews" class="w-button reviews"></input>
            </div>
            </div>
          </div>
          <p class="adventure-description">{{ str_limit($event->desc, $limit = 100, $end = '...')}}</p>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="event_id" value = "{{$event->id}}" ></input>
          <input type="submit" name="readmore" value="Read More" class="w-button event-summary-button" style="margin-left: 10px;"></input>
        </div>
        </form>
        @endforeach
        @endif
      </div>
    </div>
  </div>
@endsection




<!--<html>
<head>
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
</script>
</head>
<body>
<script type="text/javascript">
$('input[name=paid]').change(function(){
     $('form').submit();
});
</script>
  <h2>Your search results are:</h2>
  <table  border="1" style="width:100%">
    <tr>
    <h3>
    <th>Name</th>
    <th>Description</th>
    <th>Timings</th>
    <th>Ticket</th>
    <th>Ratings</th>
  </h3>
  </tr>
  
  @if(Session::has('events'))
  @foreach(Session::get('events') as $event)
    <tr>
      <td>{{ $event->name }} </td>
      <td>{{ $event->desc }} </td>
      <td>{{ $event->timings }}</td>
      <td>{{ $event->ticket }} </td>
      <td>{{ $event->ratings }} </td>
    </tr>
  @endforeach
  @endif
  
  
    </table>
    Ratings: 
    <form action="/event" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <select name = "ratings">
      <option value="nil"> </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  <input type="radio" name="paid" onchange="this.form.submit();" value="3" checked="checked"/>No<br>
  <input type="radio" name="paid" onchange="this.form.submit();" value="5"/>Yes
    <input type="submit" value="Search"></input>
   </form>
@if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
@endif
</body>
</html>
-->