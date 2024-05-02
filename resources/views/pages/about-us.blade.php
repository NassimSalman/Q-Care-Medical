@extends ("layouts.main")

@section('head')
    
    <title> About Us </title>

@endsection

@section('content')

@include('components.Header.header')

@include('components.AboutUs.about-q-care')

@include('components.AboutUs.choose-us')

@include('components.AboutUs.our-value')

@include('components.AboutUs.history')

@include('components.Home.partnership')

@include('components.Footer.footer')

@endsection

