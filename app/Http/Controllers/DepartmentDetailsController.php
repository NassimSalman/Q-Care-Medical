<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentDetailsController extends Controller
{
    public function render(){

        return view('pages.department-details');
    }
}
