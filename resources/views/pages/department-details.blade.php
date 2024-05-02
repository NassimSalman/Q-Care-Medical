@extends ("layouts.main")

@section('head')
    
    <title> Maxilofacial </title>

@endsection

@section('content')

@include('components.Header.header')

@include('components.DepartmentDetails.main-department-detail')

@include('components.DepartmentDetails.about-department')

@include('components.DepartmentDetails.department-products')

@include('components.DepartmentDetails.appointment')

@include('components.Footer.footer')

@endsection

