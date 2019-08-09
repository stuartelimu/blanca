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

Route::get('/hello', function () {
    return 'hello, world!';
});

// Route::get('/', function () {
//     return view('pages.index');
// });


Route::get('contact/', function () {
    $posts = [];
    return view('pages.contact')->with('posts', $posts);
});

Route::get('about/', function () {
    $posts = [];
    return view('pages.about')->with('posts', $posts);
});

Route::get('admin/', function () {

    $posts = [];
    return view('pages.admin')->with('posts', $posts);
});

Route::any('posts/search', 'PostsController@search');

Route::get('/', 'PostsController@index');
Route::get('comment/', 'CommentsController@store')->name('comments.store');

Route::resource('posts', 'PostsController');
// Route::resource('comments', 'CommentsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
