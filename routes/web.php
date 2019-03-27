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
    // $post = Post::find($id);
    // $post = Post::orderBy('id', 'asc')->get();
    // $post = Post::where('is_admin', 1)
    // ->where('votes', 5)
    // ->get();

    // $post = Post::all()->first();
    // $post = new Post;
    // $post->title = 'Italy is awesome';
    // $post->body = '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."';
    // $post->votes = 5;
    // $post->is_admin = 1;

    // $post->save();
    // $posts = Post::find(1);

    // $posts->title = 'Awesome Titans';
    // $posts->save();
   // return $post;

   $posts = Post::where('is_admin', 1)->update([
       'votes' => 100
   ]);
});