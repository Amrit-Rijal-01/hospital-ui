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
