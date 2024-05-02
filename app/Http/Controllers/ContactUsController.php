<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function render(){

        return view('pages.contact-us');
    }
}
