<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandPageController extends Controller
{
    public function render(){

        return view('pages.brand-page');
    }
}
