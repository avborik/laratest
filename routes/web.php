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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('contact');
// });

// Route::view('/contact', 'contact', ['name' => 'Boris']);

// //Route::redirect('/', '/contact');

// Route::get('/user/{name}/{id}',function($name,$id){
//     return 'i am '.$name.' and my ID is '.$id ;
// });

Route::get('/', function () {
   // return "Hello guys";
   return redirect()->route('contact');
})->name('home');

//Route::view('/contact', 'contact', ['name' => 'Boris'])->name('contact');
//Route::get('/contact', 'ContactController@index');
Route::get('/contact', 'ContactController@post');