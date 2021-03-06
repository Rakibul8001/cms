<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post/{id}/{name}', function($id,$name){
//     return "This is post number ".$id." ".$name;
// });

// Route::get('/post/{id}','PostsController@index');

Route::resource('posts','PostsController');
Route::get('/contact','PostsController@contact');
Route::get('post/{id}/{name}/{password}','PostsController@show_post');
        
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
