<?php



Route::get('/', 'HomeController@home');


Route::get('register','RegisterController@getRegister');
Route::post('postRegister', 'RegisterController@postRegister');

Route::get('login','LoginController@getLogin');
Route::post('postLogin','LoginController@postLogin');

Route::get('logout', function(){
    Auth::logout();
    return 'sukses logout';
});

Route::get('pageAksesKhusus',function(){
   return view('pageAksesKhusus');
});

Route::get('delete','AdminController@delete');
Route::get('update','AdminController@update');

