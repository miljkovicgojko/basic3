<?php

class UserController extends BaseController {
    
    public function login() 
    {
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) 
        {
            return Redirect::to('login')
                    ->withErrors($validator) // send back all errors to the login form
                    ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } 
        else 
        {
            // create our user data for the authentication
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            // attempt to do the login
            if (Auth::attempt($userdata)) 
            {
                // validation successful!
                return View::make('user.loggedform');
            } 
            else 
            {
                // validation not successful, send back to form	
                return Redirect::to('login');
            }
        }
    } // end function login
}
