<?php

Route::get('/test', function () {
    return App\User::find(1)->profile;
});

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
    Route::get('/posts/kill/{id}', [
        'uses'   => 'PostsController@kill',
        'as'    => 'post.kill'
    ]);
    Route::get('/posts/restore/{id}', [
        'uses'   => 'PostsController@restore',
        'as'    => 'post.restore'
    ]);
    Route::get('/posts/edit/{id}', [
        'uses'   => 'PostsController@edit',
        'as'    => 'post.edit'
    ]);
    Route::post('/posts/update/{id}', [
        'uses'   => 'PostsController@update',
        'as'    => 'post.update'
    ]);


    // Tag
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


    // Tags
    Route::get('/tags', [
        'uses'   => 'TagsController@index',
        'as'    => 'tags'
    ]);
    Route::get('/tag/store', [
        'uses'   => 'TagsController@create',
        'as'    => 'tag.create'
    ]);
    Route::post('/tag/store', [
        'uses'   => 'TagsController@store',
        'as'    => 'tag.store'
    ]);
    Route::get('/tag/edit/{id}', [
        'uses'   => 'TagsController@edit',
        'as'    => 'tag.edit'
    ]);
    Route::post('/tag/update/{id}', [
        'uses'   => 'TagsController@update',
        'as'    => 'tag.update'
    ]);
    Route::get('/tag/delete/{id}', [
        'uses'   => 'TagsController@destroy',
        'as'    => 'tag.delete'
    ]);

    // User
    Route::get('/users', [
        'uses'   => 'UsersController@index',
        'as'    => 'users'
    ]);
    Route::get('/user/create', [
        'uses'   => 'UsersController@create',
        'as'    => 'user.create'
    ]);
    Route::post('/user/store', [
        'uses'   => 'UsersController@store',
        'as'    => 'user.store'
    ]);
    Route::get('/user/admin/{id}', [
        'uses'   => 'UsersController@admin',
        'as'    => 'user.admin'
    ]);
    Route::get('/user/not-admin/{id}', [
        'uses'   => 'UsersController@not_admin',
        'as'    => 'user.not.admin'
    ]);
});
