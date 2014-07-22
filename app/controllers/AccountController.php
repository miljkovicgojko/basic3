<?php

class AccountController extends BaseController {

    public function showSignup()
    {
        return View::make('account/signup');
    }
    
    public function create()
    {
        $validator = Validator::make(Input::all(), array(
            'first_name' => 'alpha|max:20',
            'last_name' => 'alpha|max:20',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|alpha_num|regex:/\pL/|regex:/\pN/|confirmed',
            'password_confirmation' => 'required|min:6|alpha_num|regex:/\pL/|regex:/\pN/'
        ));
        if($validator->fails()){
            return Redirect::route('account-create')
                    ->withErrors($validator)
                    ->withInput();
        }else{
            $first_name = Input::get('first_name');
            $last_name = Input::get('last_name');
            $email = Input::get('email');
            $password = Input::get('password'); 
            
            //Activation code
            $remember_token = str_random(64);
           
            $user = User::create(array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => Hash::make($password),
                'remember_token' => $remember_token,
                'active' => '0'
            ));
            if($user){
                //send email
                Mail::send('emails.auth.activate', array(
                    'link'=>URL::route('account-activate',$remember_token), 
                    'first_name'=>$first_name), 
                    function($message) use ($user){
                    $message->to($user->email, $user->email)->subject("Activate your account");
                });
                return Redirect::to('login')
                        ->with('message', 'Your account has been created! We have sent you an email to activate your account!');
            }
        }
    } // End postCreate function

    public function activate($remember_token) 
    {
        $user = User::where('remember_token', '=', $remember_token)->where('active', '=', 0);
                         
        if($user->count()){
            $user = $user->first();
            $user->active = 1;
             
            if($user->save()){
                return Redirect::to('login')
                        ->with('message', 'Activated! You can now sign in.');
            }
        }
        return Redirect::to('account/signup')
                ->with('message', 'We could not activate your account. Try again later.');
    }
}    
