@extends ("layouts.main")

@section('head')
    
    <title> Home </title>

@endsection

@section('content')

@include('components.Header.header')

@include('components.Home.home-about-us')

@include('components.Home.home-services')

@include('components.Home.brands')

@include('components.Home.events')

@include('components.Home.partnership')

@include('components.Footer.footer')

@endsection

