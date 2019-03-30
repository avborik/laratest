<?php

use App\Tag;
use App\Post;
use App\User;
use App\Video;
use App\Country;

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

// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/posts', 'PostsController@index')->name('posts');

// Route::get('/posts/{id}',function($id){
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

//    $posts = Post::where('is_admin', 1)->update([
//        'votes' => 100
//    ]);
    // Post::create([
    //     'title' => 'Mass assignment 2',
    //     'body' => 'content fake',
    //     'votes' => 99,
    //     'is admin' => 1
    // ]);

    //post deleting
    // $post = Post::find(10);
    // $post->delete();
    // return $post;

    // Post::destroy(8);
   //Post::destroy(8);

   //soft delete

//    $post = Post::withTrashed()->get();
//    return $post;
// $post = Post::onlyTrashed()->get();
// return $post;

// $post = Post::onlyTrashed()
//         ->where('id', 4)
//         ->forceDelete();
// return $post;
   // $post->delete();
// });

// Route::get('/user/{id}',function($id){
//    // return User::find($id)->post;
//    return User::find($id)->posts;
// });

// Route::get('/post/{id}',function($id){
//     return Post::find($id)->user->email;
// });
// Many to many
// Route::get('/user/{id}/role',function($id){
//     $user = User::find($id);

//     foreach($user->roles as $user_role){
//         echo $user_role->name;
//     }

//     //return User::find($id)->roles;
// });

// Has many through
// Route::get('/user/{id}/country',function($id){
//     $country = Country::find($id);
//     foreach($country->posts as $post){
//         echo $post->title.'<br/>';
//     }
//    // return $country;
// });
// one to one polymorphic
// Route::get('/user/image', function(){
//     return User::find(1)->image;
// });

// Route::get('/post/image', function(){
//     return Post::find(1)->image;
// });
// many to many polymorphic
// Route::get('/post/tag',function(){
//     $post = Post::find(1)->tags;

//     return $post;
// });

// Route::get('/video/tag',function(){
//      $video = Video::find(1)->tags;

//         return $video;
// });
// Polymorphic many to many reverse
Route::get('/tag/post',function(){
    $post = Tag::find(1)->posts;
    return $post;
});

Route::get('/tag/videos',function(){
    $post = Tag::find(1)->videos;
    return $post;
});