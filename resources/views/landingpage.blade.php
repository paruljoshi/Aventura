<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sun Apr 17 2016 22:14:04 GMT+0000 (UTC) -->
<html data-wf-site="56f894ddcf3bbef45412d776" data-wf-page="56f894ddcf3bbef45412d779">
<head>
  <meta charset="utf-8">
  <title>Aventura</title>
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
 <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix" action="/search" method="post">
  <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation-bar">
    <div class="w-container nav-bar-links-container"><img width="70" src="images/Drawing-layerExport (1).jpeg" class="navbar-brand"><a href="{{ url('landingpage') }}" class="w-nav-brand brand-link"><h1 class="brand-text">Aventura</h1></a>
      <nav role="navigation" class="w-nav-menu w-clearfix navigation-menu"><a href="index.html" class="w-nav-link navigation-link">&nbsp;Help</a><a href="{{ url('home') }}" class="w-nav-link navigation-link">Log In</a><a href="{{ url('home') }}" class="w-nav-link navigation-link">Sign Up</a><a href="{{ url('cart') }}" class="w-nav-link navigation-link">0</a>
      <a href="{{ url('cart') }}" ><img width="58" src="images/trolly.png"></a>
      </nav>
      <div class="w-nav-button hamburger-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="w-section hero-section centered">
    <div data-ix="new-interaction" class="w-container">
      <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading">Aventura</h1>
      <div data-ix="fade-in-bottom-page-loads" class="hero-subheading">Adventure Near you!!</div>
    </div>
    <div class="w-clearfix searchdiv">
      <div class="searchbuttondiv"><input type="submit" value="Search" class="w-button button btn-btn-default"></input>
      </div>
      <div>
        <div class="w-form">
          	<input type="hidden" name="_token" value="{{ csrf_token() }}">
           	<input id="searchButton" type="text" placeholder="Enter any location" name="search" data-name="searchButton" class="w-input searchtext form-control">
          </form>
          @if ($errors->any())
        	{{ implode('', $errors->all(':message')) }}
        	@endif
          <div class="w-form-done">
            <p>Thank you! Your submission has been received!</p>
          </div>
          <div class="w-form-fail">
            <p>Oops! Something went wrong while submitting the form</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section section">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered">search, attend,buy</h2>
        <div class="section-subheading center">find adventure wherever you are!</div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="white-box"><img src="images/social-38-white.svg" class="grid-image">
            <h3>&nbsp;Search adventure</h3>
            <p>Locate any type of adventure around you. Interested in free one's, yes we have it.</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="white-box"><img width="210" src="images/feather-15-white.svg" class="grid-image">
            <h3>ATTEND them quickly</h3>
            <p>Want to reach there on time?
              <br>No worries, we provide a map and reminder too.</p>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="white-box"><img src="images/buy-256.png" class="grid-image">
            <h3>BuY your gear</h3>
            <p>Attending a sport where you don't have the required items?
              <br>Don't worry, we suggest you to buy it on time.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section section accent">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered white">locate / BUY / Promote /earn&nbsp;</h2>
        <h4 class="section-subheading"><strong>Search</strong> the adventures around you or anywhere or <strong>A</strong><strong>dd*</strong> your own adventure !!</h4>
      </div>
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="white-box transparent"><img src="images/city-scape.jpg" class="fullwidth-image">
            <h3 class="white-text">Locate &amp; BUY</h3>
            <p class="white-text">Locate all the adventures around you at that moment .
              <br>Locate &amp; plan adventures in advance for your trip .
              <br>Book your trip instantly or in advance.
              <br>Buy/Rent &nbsp;your required gear if you don't have it.</p><a href={{url('#email-form') }} class="hollow-button">locate &amp; Buy</a>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="white-box transparent"><img src="images/photo-1416400639808-f41f0c149b09.jpg" class="fullwidth-image">
            <h3 class="white-text">promote &amp; earn</h3>
            <p class="white-text">Promote your adventure in Aventura.
              <br>Earn money by adding &nbsp;an adventure organized by you or if you don't see it here.
              <br>Earn money by reporting &nbsp;something wrong about the adventure listed here.</p><a href="{{ url('home') }}" class="hollow-button all-caps">promote &amp; earn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section section">
    <div class="w-container">
      <div class="section-title-group">
        <h2 class="section-heading centered">lets go with "aventura"</h2>
        <div class="section-subheading center">-blessed are the curious, for they shall have adventure!!</div>
      </div>
      <div data-duration-in="300" data-duration-out="100" class="w-tabs tabs-wrapper"></div>
      <div>
        <div class="w-row">
          <div class="w-col w-col-6"><img width="495" height="305" src="images/adventure1.jpg" class="interview-image">
            <div class="user-interview"><em><br>This was my first with aventura searching out an a hiking adventure for me and I would have to tell you that I went crazy with all the things planned perfectly and with my rental gear, I was good to go and I had one of the greatest time. "</em>
              <br>- Marshall (Aventura User)</div>
          </div>
          <div class="w-col w-col-6"><img src="images/Adventure2.jpg">
            <div>
              <br>I have been working as a guide for canoeing and I always wanted to organize a canoe race all by myself and aventura helped me with it. Not only with getting the members but also kept a record of rentals and buyers for me.
              <br>- Sylvia (Aventura user)</div>
          </div>
        </div>
      </div>
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
</body>
</html>


<!--
<link rel="stylesheet" href="{{ URL::asset('css/landingpage.css') }}" type="text/css">


<html>
<body>
    <H1>Aventura Home Page</H1>
<form action="/search" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input placeholder="Search" name ="search"></input>
    <input type="submit" value="Search"></input>
    </form>
    @if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
@endif
</body>
</html>
-->