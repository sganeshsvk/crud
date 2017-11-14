<?php
use App\Post;
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

/*Route::get('/', function () {
    return view('login');
});*/

Route::get('/','PostController@index')->name('posts.index');
Route::get('/posts/show/{id}','PostController@show')->name('posts.details')->where('id','[0-9]+');
Route::get('/posts/add','PostController@create')->name('posts.add');
Route::post('/posts/insert','PostController@store')->name('posts.insert');
Route::get('/posts/edit/{id}','PostController@edit')->name('posts.edit');
Route::post('/posts/update/{id}','PostController@update')->name('posts.update');
Route::get('/posts/delete/{id}','PostController@destroy')->name('posts.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
