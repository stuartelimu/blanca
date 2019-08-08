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
    return view('pages.contact');
});

Route::get('about/', function () {
    return view('pages.about');
});

Route::get('admin/', function () {
    return view('pages.admin');
});

Route::any('posts/search', 'PostsController@search');

Route::get('/', 'PostsController@index');
Route::get('comment/', 'CommentsController@store')->name('comments.store');

Route::resource('posts', 'PostsController');
// Route::resource('comments', 'CommentsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
