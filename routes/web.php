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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('blog/', function () {
    return view('pages.blog');
});

Route::get('contact/', function () {
    return view('pages.contact');
});

Route::get('about/', function () {
    return view('pages.about');
});

// Route::get('/', 'PagesController@index');
