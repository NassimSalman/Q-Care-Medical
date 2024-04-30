@extends ("layouts.main")

@section('head')
    
    <title> Brand Page </title>

@endsection

@section('content')

@include('components.header')

@include('components.accu-vein')

@include('components.brand-details')

@include('components.products')

@include('components.footer')

@endsection

