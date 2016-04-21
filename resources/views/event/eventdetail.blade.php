<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Thu Apr 21 2016 21:10:52 GMT+0000 (UTC) -->
<html data-wf-site="56f894ddcf3bbef45412d776" data-wf-page="571840fe13df03a741a7b7b9">
<head>
  <meta charset="utf-8">
  <title>Events-Detailed</title>
  <meta property="og:title" content="Events-Detailed">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/aventura.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
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
  <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation-bar">
    <div class="w-container nav-bar-links-container"><img width="70" src="images/Drawing-layerExport (1).jpeg" class="navbar-brand"><a href="index.html" class="w-nav-brand brand-link"><h1 class="brand-text">Aventura</h1></a>
      <nav role="navigation" class="w-nav-menu w-clearfix navigation-menu"><a href="index.html" class="w-nav-link navigation-link">&nbsp;Help</a><a href="index.html" class="w-nav-link navigation-link">Log In</a><a href="events.html" class="w-nav-link navigation-link">Sign Up</a><a href="events.html" class="w-nav-link navigation-link">0</a><img width="58" src="images/trolly.png">
      </nav>
      <div class="w-nav-button hamburger-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
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
  <div class="w-section footer">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 spc">
          <h5>about Aventura</h5>
          <p>Aventura is designed to solve the problem of tedious search on adventurous activities online. This application helps user to locate nearby activities, paid or free one's too.</p>
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