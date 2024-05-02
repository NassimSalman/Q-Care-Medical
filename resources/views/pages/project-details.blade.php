@extends ("layouts.main")

@section('head')
    
    <title> Project Details </title>

@endsection

@section('content')

@include('components.Header.white-header')

@include('components.ProjectDetails.project-details')

@include('components.Footer.footer')

@endsection