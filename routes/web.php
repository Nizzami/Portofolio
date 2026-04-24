<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', function () {
    return back()->with('success', 'Message sent!');
})->name('contact.send');
