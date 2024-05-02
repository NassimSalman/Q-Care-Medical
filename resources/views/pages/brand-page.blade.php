@extends ("layouts.main")

@section('head')
    
    <title> Brand Page </title>

@endsection

@section('content')

@include('components.Header.header')

@include('components.BrandPage.accu-vein')

@include('components.BrandPage.brand-details')

@include('components.BrandPage.products')

@include('components.Footer.footer')

@endsection

