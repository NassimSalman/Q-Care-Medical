@extends ("layouts.main")

@section('head')
    
    <title> Our Work </title>

@endsection

@section('content')

@include('components.Header.header')

@include('components.OurWork.our-work-main')

@include('components.OurWork.projects')

@include('components.Home.partnership')

@include('components.Footer.footer')

@endsection

