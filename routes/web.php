<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return view('new');
});
