@extends ("layouts.main")

@section('head')
    
    <title> Home </title>

@endsection

@section('content')

@include('components.header')

@include('components.home-about-us')

@include('components.home-services')

@include('components.brands')

@include('components.events')

@include('components.partnership')

@include('components.footer')

@endsection

