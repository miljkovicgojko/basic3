<?php


// Localization - exercise 9
Route::get('language/{lang}', 'UserController@showLanguage');
// End localization

Route::filter('isAuth', function()   
{
    if(Auth::check())
    {
        return Redirect::to('/');
    }
});

Route::get('login',array('before' => 'isAuth', 'uses' => 'UserController@showLogin'));

Route::post('login', 'UserController@login');

Route::get('logout', 'UserController@logout');

Route::get('/', 'UserController@profile');

 // Test action - exercise 4
Route::get('test', 'TestController@showTest');