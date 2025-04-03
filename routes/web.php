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
Route::get('/per-blog', function () {
   return view('front.pages.per-blog.per-blog');
});
Route::get('/patient-stories', function () {
   return view('front.pages.patient-stories');
});
Route::get('/policy-form', function () {
   return view('front.pages.policy');
});
Route::get('/all-videos', function () {
   return view('front.pages.all-videos');
});
Route::get('/help-desk', function () {
   return view('front.pages.help-desk');
});
Route::get('/cpr', function () {
   return view('front.pages.cpr');
});
Route::get('/about-us', function () {
   return view('front.pages.about-us');
});
Route::get('/single-event', function () {
   return view('front.pages.single-event');
});
Route::get('/jobs', function () {
   return view('front.pages.jobs-list');
});
Route::get('/job-detail', function () {
   return view('front.pages.job-detail');
});
