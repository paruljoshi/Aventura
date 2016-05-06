@extends('layouts.app')

@section('content')
<div class="w-section hero-section centered reportevent">
    <div data-ix="new-interaction" class="w-container">
      <h1 data-ix="fade-in-bottom-page-loads" class="hero-heading">Report An Event</h1>
    </div>
  </div>
<div class="add-event-div">
@if($status)
    {{ $status }}
  @endif

  @if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
    @endif
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form" class="add-event-form" action="/savereport" method="post">
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="name">Event Name:</label>
          </div>
          <div class="w-col w-col-10">
          @if($events)
            <select id="eventName" name="event_name" data-name="eventName" class="w-select">
              <option value=" ">Select one event</option>
              @foreach($events as $event)
              <option value="{{$event->id}}">{{$event->name}} : {{$event->country}} </option>
              @endforeach
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </select>
            @endif
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="email">Reason:</label>
          </div>
          <div class="w-col w-col-10">
            <select id="field" name="eventReason" class="w-select">
              <option value="">Select one reason</option>
              <option value="incorrect">Incorrect details</option>
              <option value="notFound">Event not found</option>
              <option value="hatedIt">Didn't like it</option>
            </select>
          </div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-2">
            <label for="email">Explain:</label>
          </div>
          <div class="w-col w-col-10">
            <textarea id="eventDesc-7" placeholder="Please explain why are you reporting this" name="eventDesc" data-name="eventDesc" required="required" class="w-input"></textarea>
          </div>
        </div>
        <input type="submit" value="Report Event" data-wait="Please wait..." class="w-button add-event-button">
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
