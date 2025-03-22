<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/front/pages/home');
});
Route::get('/career', function() {
    return view('front.pages.career');
});
Route::get('/speciality', function () {
    return view('front.pages.speciality');
});
Route::get('/contact-us', function() {
    return view('front.pages.contact-us');
});
Route::get('/health-library', function() {
    return view('front.pages.health-library');
});
Route::get('/all-specialities', function () {
    return view('front.pages.all-specialities');
});
Route::get('/treatments', function () {
    return view('front.pages.all-treatments');
});
Route::get('/events', function () {
    return view('front.pages.events');
});
