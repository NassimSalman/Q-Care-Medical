<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function render()
    {
        return view('pages.event-details');
    }
}
