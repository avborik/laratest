<?php

use App\Post;
use App\User;

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
// Route::get('/admin',function(){
//     return 'Hello admin';
// })->middleware('auth');

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/', function(){
    return 'This is Bears home';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
