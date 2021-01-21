<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new',[
     
    'uses' => 'PagesController@new'
]);

Route::get('/todos',[
     
    'uses' => 'TodosController@index'
]);

Route::post('/create/todos',[
     
    'uses' => 'TodosController@store'
]);
