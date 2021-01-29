<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', [

    'uses' => 'PagesController@new'

]);

Route::get('/todos', [

    'uses' => 'TodosController@index',
    'as'   => 'todos'
]);


Route::get('/todo/delete/{id}', [

    'uses' => 'TodosController@delete',
    'as'   => 'todo.delete'
]);

Route::get('/todo/update/{id}', [

    'uses' => 'TodosController@update',
    'as'   => 'todo.update'
]);

Route::post('/todo/save/{id}', [

    'uses' => 'TodosController@save',
    'as'   => 'todo.save'
]);

Route::post('/create/todo', [

    'uses' => 'TodosController@store'
]);
Route::get('/todos/completed/{id}', [

    'uses' => 'TodosController@completed',
    'as'   => 'todos.completed'
]);
// Authentication
Auth::routes();


// Post
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

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
    Route::get('/post/delete/{id}', [
        'uses'   => 'PostsController@destroy',
        'as'    => 'post.delete'
    ]);
    Route::get('/posts', [
        'uses'   => 'PostsController@index',
        'as'    => 'posts'
    ]);
    Route::get('/posts/trashed', [
        'uses'   => 'PostsController@trashed',
        'as'    => 'posts.trashed'
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
    Route::get('/category/edit/{id}', [
        'uses'   => 'CategoriesController@edit',
        'as'    => 'category.edit'
    ]);
    Route::post('/category/update/{id}', [
        'uses'   => 'CategoriesController@update',
        'as'    => 'category.update'
    ]);
    Route::get('/category/delete/{id}', [
        'uses'   => 'CategoriesController@destroy',
        'as'    => 'category.delete'
    ]);
});
