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


// Post
Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function () {
    
    Route::get('/home', [
        'uses'  => 'HomeController@index',
        'as'    => 'home'
    ]);
    Route::get('/post/create', [
        'uses'   => 'PostsController@create',
        'as'    => 'post.create'
    ]);
    Route::post('/post/store', [
        'uses'   => 'PostsController@store',
        'as'    => 'post.store'
    ]);
    // category
    Route::get('/category/create', [
        'uses'   => 'CategoriesController@create',
        'as'    => 'category.create'
    ]);
    Route::post('/category/store', [
        'uses'   => 'CategoriesController@store',
        'as'    => 'category.store'
    ]);

    Route::get('/categories', [
        'uses'   => 'CategoriesController@index',
        'as'    => 'categories'
    ]);

});