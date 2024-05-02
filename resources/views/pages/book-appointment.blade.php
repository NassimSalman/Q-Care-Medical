@extends ("layouts.main")

@section('head')
    
    <title> Book an Appointment </title>

@endsection

@section('content')

@include('components.Header.white-header')

@include ('components.BookAppointment.book-appointment')

@include('components.Footer.footer')

@endsection