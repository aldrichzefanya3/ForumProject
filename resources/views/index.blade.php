@extends('layout')
@section('content')
<h1>Events</h1>

<div class="container button">    
        <button type="button" class="btn btn-primary btn-sm active " role="button">Create Event</button>
</div>
<style>
    .container button{
        float: right;
        
    }

</style>
<div class="container table responsive">
    <table class="table table-striped" >
        <thead>
        <tr>
            <th>Event Title</th>
            <th>Event Subtitle</th>
            <th>Event Description</th>
            <th>Datetime-Start</th>
            <th>Datetime-Finish</th>
            <th>Event Address </th>
            <th>Geolocation</th>
            <th>City</th>
            <th>Termand Condition</th>
            <th>Slot</th>
        </tr>
        @foreach($data_event as $event)
        <tr>
            <td>{{$event->title_event}}</td>
            <td>{{$event->subtitle_event}}</td>
            <td>{{$event->description_event}}</td>
            <td>{{$event->datetime_start_event}}</td>
            <td>{{$event->datetime_finish_event}}</td>
            <td>{{$event->address_event}}</td>
            <td>{{$event->geolocation_event}}</td>
            <td>{{$event->city_event}}</td>
            <td>{{$event->termandcondition_event}}</td>
            <td>{{$event->slot_event}}</td>
        </tr>
        @endforeach
        </thead>
    </table>
</div>
@endsection

            
