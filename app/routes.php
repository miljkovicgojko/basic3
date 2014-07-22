<?php


Route::get('/account/signup',array(
    'as' => 'account-create',
    'uses' => 'AccountController@showSignup'
));
Route::post('/account/signup',array(
    'as' => 'account-create-post',
    'uses' => 'AccountController@create'
));

Route::get('/account/activate/{remember_token}', array(
    'as' => 'account-activate',
    'uses' => 'AccountController@activate'
));

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

Route::get('/', array(
    'as' => 'home',
    'uses' => 'UserController@profile'));

 // Test action - exercise 4
Route::get('test', 'TestController@showTest');
