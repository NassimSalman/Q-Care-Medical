@extends ("layouts.main")

@section('head')
    
    <title> Event Details </title>

@endsection

@section('content')

@include('components.Header.white-header')

@include('components.EventDetails.event-details')

@include('components.Footer.footer')

@endsection