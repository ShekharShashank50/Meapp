<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hello', function () {
    //return view('welcome');
    return "<h1>artisan</h1>";
});
Route::get('/users/{id}/{name}', function($id,$name){
    return 'This is user '.$name.'with an id'.$id;
});
*/

Route::get('/','PagesController@index');
Route::get('/forum','PagesController@forum');
Route::get('/services','PagesController@services');
Route::get('/messenger','PagesController@messenger');
Route::post('/posts/create','PostsController@store');
      
Route::resource('posts', 'PostsController');

Route::get('/forum', function(){
    return view('pages.forum');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
