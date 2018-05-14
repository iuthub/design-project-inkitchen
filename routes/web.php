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
    return view('/about_us');
});
Route::resource('/posts', 'PostsController'); 
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('categories/breakfast', 'PostsController@breakfast');
Route::get('categories/salad', 'PostsController@salad');
Route::get('categories/launch', 'PostsController@launch');
Route::get('categories/dinner', 'PostsController@dinner');
Route::get('categories/desert', 'PostsController@desert');
Route::get('categories/healthy', 'PostsController@healthy');

