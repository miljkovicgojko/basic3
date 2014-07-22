<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
    RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');
    
    protected $fillable = array(
        'email',
        'password',
        'first_name',
        'last_name',
        'active',
        'remember_token');
    
    public static $rules = array(
        'first_name' => 'alpha|max:20',
        'last_name' => 'alpha|max:20',
        'email' => 'required|unique:users,email|email',
        'password' => 'required|min:6|alpha_num|regex:/\pL/|regex:/\pN/|confirmed',
        'password_confirmation' => 'required|min:6|alpha_num|regex:/\pL/|regex:/\pN/'
    );
}
