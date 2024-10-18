<?php

use App\Http\Middleware\LogRequests;
use Illuminate\Support\Facades\Route;

Route::middleware(LogRequests::class)->group(function () { 
    Route::get('/', function () {
        return view('index-home');
    })->name('home');

    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/restricted', function () {
        return view('restricted');
    })->name('restricted');

    Route::get('/denied', function () {
        return view('denied');
    })->name('denied');

    Route::post('/CheckAge', [
        'middleware' => 'check.age',
        function () {
            return view('restricted');
        }
    ]);

    Route::get('/lab1', function () {
        return view('lab1');
    })->name('lab1');

    Route::get('/lab2', function () {
        return view('lab2');
    })->name('lab2');

    Route::get('/lab3', function () {
        return view('lab3');
    })->name('lab3');

    Route::get('/lab4', function () {
        return view('lab4');
    })->name('lab4');
});
