@extends('layouts.app')

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

  <div class="add-event-div">
  @if (session('status'))
        {{ session('status') }}
  @endif

  @if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
    @endif
    <h1 class="add-event-heading">Add your event :</h1>
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" class="add-event-form" action="/eventsave" method="post">
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="name">*Name:</label>
          </div>
          <div class="w-col w-col-10">
            <input id="eventName" type="text" placeholder="Enter your event name" name="eventName" data-name="eventName" class="w-input">
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="email">Description:</label>
          </div>
          <div class="w-col w-col-10">
            <textarea id="eventDesc-7" placeholder="Enter your event description" name="eventDesc" data-name="eventDesc" required="required" class="w-input" style="height: 600px;"></textarea>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="email">Ticket:</label>
          </div>
          <div class="w-col w-col-10">
            <input id="eventDesc-6" type="text" placeholder="Enter your Ticket Amount" name="eventTicket" data-name="Event Desc 6" required="required" class="w-input">
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="email">Date :</label>
          </div>
          <div class="w-col w-col-10">
            <input type="text" id="datepicker" placeholder="Select date" name="eventDate" data-name="Event Desc 6" class="w-input">
          </div>
        </div>
         
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="email">Timings:</label>
          </div>
          <div class="w-col w-col-10">
            <select id="hours" name="eventHours" data-name="hours" class="w-select add-event-timings">
                <option value="00"> </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <select id="minutes" name="eventMinutes" data-name="minutes" class="w-select add-event-timings">
                <option value="00"> </option>
                <option value="00">00</option>
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>
            </select>
            <select id="field-6" name="eventAM" data-name="Field 6" class="w-select add-event-timings">
              <option value="0"> </option>
                <option value="AM">AM</option>
                <option value="PM">PM</option>
            </select>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="email">*Address:</label>
          </div>
          <div class="w-col w-col-10">
            <textarea id="eventAddress" placeholder="Enter your event address" name="eventAddress" data-name="eventAddress" required="required" class="w-input"></textarea>
            <div class="w-row">
              <div class="w-col w-col-4">
                <select id="state" name="eventState" data-name="state" class="w-select add-event-select-city">
                  <option value="">Select City</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select>
              </div>
              <div class="w-col w-col-8">
                <select id="field-2" name="field-2" class="w-select add-event-select-city">
                  <option value="">Select State</option>
                  <option value="First">First Choice</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-4">
                <select id="field-3" name="eventCountry" class="w-select add-event-select-city">
                  <option value="">Select Country</option>
                  <option value="First">San Francisco</option>
                  <option value="Second">Second Choice</option>
                  <option value="Third">Third Choice</option>
                </select>
              </div>
              <div class="w-col w-col-8">
                <input id="zip-code" type="text" placeholder="Enter your zip code" name="zip-code" required="required" data-name="zip-code" class="w-input add-event-select-city">
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Add Event" name= "addEvent" data-wait="Please wait..." class="w-button add-event-button">
      </form>
      <div class="w-form-done">
        <p>Thank you! Your submission has been received!</p>
      </div>
      <div class="w-form-fail">
        <p>Oops! Something went wrong while submitting the form</p>
      </div>
    </div>
  </div>
@endsection

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@if (session('status'))
        {{ session('status') }}
@endif

@if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
@endif
<form action="/event/save" method="post">
	<input type="text" name = "eventName"></input>
	<input type="text" name = "eventDesc"></input>
	<input type="text" name = "eventCountry"></input>
	<input type="text" name = "eventTicket"></input>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="submit" name="addEvent" value ="Add Event"></input>
</form>
</body>
</html>
-->