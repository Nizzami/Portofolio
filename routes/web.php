<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', function () {
    return back()->with('success', 'Message sent!');
})->name('contact.send');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');