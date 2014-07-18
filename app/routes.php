<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Login action - exercise 7
Route::filter('isAuth', function()   
{
    if(Auth::check())
    {
        return View::make('user.loggedform');
    }
});

Route::get('login', array('before' => 'isAuth', function()
{        return View::make('login.loginform')
            ->with('title', 'Login');
}));

Route::post('login', 'UserController@login');

Route::get('logout',function(){
    Auth::logout();
    Session::flush();
    return Redirect::to('login');
});
// End of exercise 7

Route::get('/', function()
{
	return View::make('hello');
});
 // Test action - exercise 4
Route::get('test', 'TestController@showTest');