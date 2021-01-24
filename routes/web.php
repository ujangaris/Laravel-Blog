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


Route::get('/todo/delete/{id}',[
     
    'uses' => 'TodosController@delete',
    'as'   => 'todo.delete'
]);

Route::post('/create/todo',[
     
    'uses' => 'TodosController@store'
]);
