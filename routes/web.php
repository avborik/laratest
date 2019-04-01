<?php

use App\Post;
use App\User;
use Illuminate\Http\Request;

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

Route::get('/',['middleware'=>'awesome',function(){
    return 'Nothing for Bears';
}]);
//     $request->session()->put('Mode','Awesome');
//    $request->session()->put('Days',['1','2','3']);
//    $request->session()->put('Mode','SuperAwesome');
//    $request->session()->push('Days', '4');
//return $request->session()->get('Mode');
//$request->session()->forget('Days');
// session(['Mode'=>'ULTRA AWESOME']);
// session(['Days'=>['x']]);
   //$request->session()->flash('Gretting','Hello guys');
  // $request->session()->reflash();
//    $request->session()->keep(['Gretting']);
//     return $request->session()->all();
//return 'Nothing for Bears';
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
