<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookAppointmentController extends Controller
{
    public function render(){

        return view('pages.book-appointment');
    }
}
