@extends('layouts.master')

@section('content')
  <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix" action="/search" method="post">
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
@endsection
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