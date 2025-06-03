<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Routing Dasar
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Routing dengan Parameter
Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

// Named Routes
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// Passing Data ke View
Route::get('/portfolio', function () {
    $projects = ['Web Design', 'Mobile App', 'UI/UX'];
    return view('portfolio', [
        'projects' => $projects,
        'title' => 'My Projects'
    ]);
});

