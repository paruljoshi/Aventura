<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Wed Apr 20 2016 02:46:38 GMT+0000 (UTC) -->
<html data-wf-site="56f894ddcf3bbef45412d776" data-wf-page="56f894ddcf3bbef45412d77c" data-wf-domain="%%PUBLISH_URL_REPLACEMENT%%">
<head>
  <meta charset="utf-8">
  <title>Events</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/aventura.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
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
<body>
<script type="text/javascript">
$('input[name=paid]').change(function(){
     $('form').submit();

});
</script>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation-bar">
    <div class="w-container nav-bar-links-container"><img width="70" src="images/Drawing-layerExport (1).jpeg" class="navbar-brand"><a href="index.html" class="w-nav-brand brand-link"><h1 class="brand-text">Aventura</h1></a>
      <nav role="navigation" class="w-nav-menu w-clearfix navigation-menu"><a href="index.html" class="w-nav-link navigation-link">&nbsp;Help</a><a href="index.html" class="w-nav-link navigation-link">Log In</a><a href="events.html" class="w-nav-link navigation-link">Sign Up</a><a href="events.html" class="w-nav-link navigation-link">0</a><img width="58" src="images/trolly.png">
      </nav>
      <div class="w-nav-button hamburger-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  
  <div class="w-row search-column">
    <div class="w-col w-col-3 search-column">
      <div class="w-form search-option-form">
        <form id="wf-form-search-options" name="wf-form-search-options" action="/event" method="post" data-name="search-options" class="search-option-form">
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
        <div class="adventure-item-div" onClick="document.forms['event-detail'].submit();">
        <form action ="/eventdetail" method="post" name = "event-detail">
          <h1 class="event-heading">{{ $event->name }}</h1>
          <div class="w-row">
            <div class="w-col w-col-6 reviews">{{ $event->ratings }}<img src="images/reviewStars3.png">
            </div>
            <div class="w-col w-col-6">
              <div class="reviews">20 Reviews {{ $event->ticket }} Tickets</div>
            </div>
          </div>
          <p class="adventure-description">{{ $event->desc }}</p>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="event_id" value = "{{$event->id}}" ></input>
        </div>
        </form>
        @endforeach
        @endif
      </div>
    </div>
  </div>
  <div class="w-section footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 spc">
          <h5>about velocity</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.</p>
        </div>
        <div class="w-col w-col-4 spc">
          <h5>useful links</h5><a href="#" class="footer-link">Phasellus gravida semper nisi</a><a href="#" class="footer-link">Suspendisse nisl elit</a><a href="#" class="footer-link">Dellentesque habitant morbi</a><a href="#" class="footer-link">Etiam sollicitudin ipsum</a>
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
          <div class="w-clearfix footer-link-wrapper"><img width="20" src="images/social-12.svg" class="info-icon"><a href="#" class="footer-link with-icon">Webflow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section footer center">
    <div class="w-container">
      <div class="footer-text">Copyright Velocity Inc. Made in Webflow.</div>
      <div class="footer-text">Copyright © Aventura 2016</div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>





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