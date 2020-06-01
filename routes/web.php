<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('threads.index');
});

Route::get('/threads/{id}', function ($id) {
    $result = \App\Models\Thread::findOrFail($id);
    return view('threads.view', compact('result'));
});


Auth::routes();

Route::middleware(['auth'])
    ->group(function () {
        Route::get('/threads', 'ThreadController@index');
    });

Route::get('/home', 'HomeController@index')->name('home');
