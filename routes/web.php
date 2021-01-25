<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new',[
     
    'uses' => 'PagesController@new'
    
    ]);
    
    Route::get('/todos',[
        
        'uses' => 'TodosController@index',
        'as'   => 'todos'
]);


Route::get('/todo/delete/{id}',[
     
    'uses' => 'TodosController@delete',
    'as'   => 'todo.delete'
]);

Route::get('/todo/update/{id}',[
     
    'uses' => 'TodosController@update',
    'as'   => 'todo.update'
]);

Route::post('/todo/save/{id}',[
     
    'uses' => 'TodosController@save',
    'as'   => 'todo.save'
]);

Route::post('/create/todo',[
     
    'uses' => 'TodosController@store'
]);
Route::get('/todos/completed/{id}',[
     
    'uses' => 'TodosController@completed',
    'as'   => 'todos.completed'
]);
// Authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Post

Route::get('/post/create', [
    'uses'   => 'PostsController@create',
    'as'    => 'post.create'
]);
Route::post('/post/store', [
    'uses'   => 'PostsController@store',
    'as'    => 'post.store'
]);