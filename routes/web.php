<?php

use App\Post;

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

// 

//Route::view('/contact', 'contact', ['name' => 'Boris'])->name('contact');
//Route::get('/contact/{name}', 'ContactController@index');
//Route::get('/contact', 'ContactController@post');

// Route::resources([
//     'contact'=> 'ContactController',
//     'user'=> 'UserController'
// ]);

// Route::resource('contact', 'ContactController')->only([
//     'index','show'
// ]);

//Route::resource('user', 'UserController');

// Route::resource('contact', 'ContactController')->exept([
//     'create','store','update','destroy'
// ]);

// Route::resource('contact', 'ContactController')->except([
//     'create','store','update','destroy'
// ])->names([
//     'edit'=>'contact.superawesome'
// ]);

// Route::get('/contact/{user}/{age}/{name}','ContactController@espec');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/posts/{id}',function($id){
    //return 'Hey Pandas';
    //$posts = Post::all();
    $post = Post::find($id);
    return $post;
});