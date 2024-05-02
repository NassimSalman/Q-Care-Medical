<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function() {
    return view('pages.about-us');
});

Route::get('/brand-page', function() {
    return view('pages.brand-page');
});

Route::get('/department-details', function() {
    return view('pages.department-details');
});

Route::get('/book-appointment', function() {
    return view('pages.book-appointment');
});

Route::get('/our-work', function() {
    return view('pages.our-work');
});

Route::get('/events', function() {
    return view('pages.events');
});

Route::get('/contact-us', function() {
    return view('pages.contact-us');
});