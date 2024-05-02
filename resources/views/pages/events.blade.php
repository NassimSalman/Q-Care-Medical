@extends ("layouts.main")

@section('head')
    
    <title> Events </title>

@endsection

@section('content')

@include('components.Header.header')

@include('components.Events.events-main')

@include('components.Events.latest-events')

@include('components.Footer.footer')

@endsection