<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function render()
    {
        return view('pages.project-details');
    }
}
