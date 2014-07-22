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
                'password' => Input::get('password'),
                'active' => 1
            );
            // attempt to do the login
            if (Auth::attempt($userdata)) 
            {
                // validation successful!
                return View::make('user.profile');
            } 
            else 
            {
                // validation not successful, send back to form	
                return Redirect::to('login')
                        ->with('message', 'Bed credentional or account not active!' );
            }
        }
    } // end function login
    
    public function showLogin()
    {
        return View::make('login.loginform')
            ->with('title', 'Login');
    }
    
    public function showLanguage($lang)
    {
        App::setLocale($lang);
        
        $user = User::find(Auth::user()->id);
        $user->language = $lang;
        $user->update();
        
        return Redirect::back();
    }
 
    public function logout() 
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('login');
    }
    
    public function profile()
    {
        return View::make('user.profile');
    }
}
