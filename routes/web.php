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


// Route::get('/hello', function () {
//     //return view('welcome');
//     return '<h1>Hello Bitch</h1> <a href="./pages/about.blade.php"> <button>Next One</button> </a> <a href="/"> <button>Go Back</button> </a>';
// });


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function(){
//     return view ('pages.about');
// });

// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'The username is '.$name.'. The user id is '.$id;
// });


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
