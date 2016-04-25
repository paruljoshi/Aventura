@extends('layouts.master')

@section('content')
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
            <div class="w-checkbox">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input id="checkbox" type="checkbox" name="activity" data-name="Checkbox" value ="Bungee Jumping" onchange="this.form.submit();"  class="w-checkbox-input">
              <label for="checkbox" class="w-form-label">Bungee Jumping</label>
            </div>
            <div class="w-checkbox">
              <input id="checkbox" type="checkbox" name="activity" value="Go Karting" onchange="this.form.submit();" data-name="Checkbox 11" class="w-checkbox-input">
              <label for="checkbox-11" class="w-form-label">Go Karting</label>
            </div>
            <div class="w-checkbox">
              <input id="checkbox-10" type="checkbox" name="activity" value="Ice Skating" onchange="this.form.submit();" data-name="Checkbox 10" class="w-checkbox-input">
              <label for="checkbox-10" class="w-form-label">Ice Skating</label>
            </div>
            <div class="w-checkbox">
              <input id="checkbox-9" type="checkbox" name="activity" value="Kayaking" onchange="this.form.submit();"  data-name="Checkbox 9" class="w-checkbox-input">
              <label for="checkbox-9" class="w-form-label">Kayaking</label>
            </div>
            <div class="w-checkbox">
              <input id="checkbox-8" type="checkbox" name="activity" value="RiverRafting" onchange="this.form.submit();"  data-name="Checkbox 8" class="w-checkbox-input">
              <label for="checkbox-8" class="w-form-label">RiverRafting</label>
            </div>
            <div class="w-checkbox">
              <input id="checkbox-7" type="checkbox" name="activity" value="Sky Diving" data-name="Checkbox 7" onchange="this.form.submit();"  class="w-checkbox-input">
              <label for="checkbox-7" class="w-form-label">Sky Diving</label>
            </div>
          </div>
          <div class="activity-option">
            <label class="price-option">Price :</label>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="0" onchange="this.form.submit();" data-name="Radio" class="w-radio-input">
              <label for="radio" class="w-form-label">0</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="50" onchange="this.form.submit();" data-name="Radio" class="w-radio-input">
              <label for="radio" class="w-form-label">0 - 50</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="150" onchange="this.form.submit();" data-name="Radio" class="w-radio-input">
              <label for="radio" class="w-form-label">50 - 150</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="300" onchange="this.form.submit();" data-name="Radio" class="w-radio-input">
              <label for="radio" class="w-form-label">150 - 300</label>
            </div>
            <div class="w-radio">
              <input id="radio" type="radio" name="price" value="301" onchange="this.form.submit();" data-name="Radio" class="w-radio-input">
              <label for="radio" class="w-form-label">300 above</label>
            </div>
          </div>
          <div class="activity-option">
            <label>Ratings :</label>
            <div class="w-checkbox">
              <input id="5Stars" type="checkbox" name="ratings" data-name="5Stars" class="w-checkbox-input" onchange="this.form.submit();" value ="5" ><img src="images/reviewStars5.png">
              <label for="checkbox-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
            <div class="w-checkbox">
              <input id="4Stars-4" type="checkbox" name="ratings" data-name="4Stars" class="w-checkbox-input"  onchange="this.form.submit();" value="4"><img src="images/reviewStars4.png">
              <label for="checkbox-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
            <div class="w-checkbox">
              <input id="3Stars" type="checkbox" name="ratings" data-name="3Stars" class="w-checkbox-input"  onchange="this.form.submit();" value="3"><img src="images/reviewStars3.png">
              <label for="checkbox-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
            <div class="w-checkbox">
              <input id="2Stars" type="checkbox" name="ratings" data-name="2Stars" class="w-checkbox-input"  onchange="this.form.submit();" value="2"><img src="images/reviewStars2.png">
              <label for="checkbox-12" class="w-form-label">&nbsp;&amp; Up</label>
            </div>
          </div>
          <div class="activity-option">
            <label>Day :</label>
            <div class="w-radio">
              <input id="radio-2" type="radio" name="date" value="00:00:0000" onchange="this.form.submit();" data-name="Radio 2" class="w-radio-input">
              <label for="radio-2" class="w-form-label">Today</label>
            </div>
            <div class="w-radio w-clearfix">
              <input id="radio-2" type="radio" name="date" value="manual" onchange="this.form.submit();" data-name="Radio 2" class="w-radio-input">
              <label for="radio-2" class="w-form-label">Select a Date : </label>
              <select>
                <option value="00"> </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <select>
                <option value="00"> </option>
                <option value="1">Jan</option>
                <option value="2">Feb</option>
                <option value="3">Mar</option>
                <option value="4">Apr</option>
              </select>
              <select>
                <option value="0000"> </option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
              </select>
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