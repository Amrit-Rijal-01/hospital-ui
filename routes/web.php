<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/front/pages/home');
});
Route::get('/why-us', function () {
   return view('front.pages.why-us');
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
    return view('front.pages.health-library.health-library');
});
Route::get('/all-specialities', function () {
    return view('front.pages.all-specialities');
});
Route::get('/technologies', function () {
    return view('front.pages.health-library.technologies');
});
Route::get('/treatments', function () {
    return view('front.pages.health-library.treatments');
});
Route::get('/ailments', function () {
    return view('front.pages.health-library.ailments');
});
Route::get('/events', function () {
    return view('front.pages.health-library.events');
});
Route::get('/downloads', function () {
    return view('front.pages.health-library.downloads');
});
Route::get('/blogs', function () {
    return view('front.pages.health-library.knowledge.blogs');
});
Route::get('/videos', function () {
    return view('front.pages.health-library.knowledge.videos');
});
Route::get('/case-studies', function () {
    return view('front.pages.health-library.knowledge.case-studies');
});
Route::get('/news-letter', function () {
    return view('front.pages.health-library.knowledge.news-letter');
});
Route::get('/per-treatment', function () {
    return view('front.pages.per-treatment.per-treatment');
});
Route::get('/per-technology', function () {
   return view('front.pages.per-technology.per-technology');
});
Route::get('/per-ailment', function () {
   return view('front.pages.per-ailment.per-ailment');
});
Route::get('/doctor-listing', function () {
   return view('front.pages.doctor-listing');
});
Route::get('/doctor-profile', function () {
   return view('front.pages.doctor-profile');
});
