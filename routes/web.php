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
Route::get('/', function () {
    return view('home');
    
});
Route::get('/termsprivacy', function () {
    return view('termsprivacy');
    
});
Route::get('/signup', function () {
    return view('signup');
    
});
Route::get('/signin', function () {
    return view('login');
    
    
});



Route::resource('/forums','ForumController');
Route::get('/register_action','RegisterController@index');
Route::post('/register_action','RegisterController@store');

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('');
})->middleware("auth");
Route::post('login_check','RegisterController@login');
Route::post('/forums/comments','CommentController@addComment');
    