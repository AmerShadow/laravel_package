<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('Greetings::contact');
});

Route::post('contact', function(){
    // logic goes here
    return "hello";
})->name('contact');
