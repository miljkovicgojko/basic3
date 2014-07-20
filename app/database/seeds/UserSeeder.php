<?php

class UserSeeder extends Seeder
{
    public function run() 
    {
        DB::table('users')->delete();
        User::create(array(
           'first_name' => 'Gojko',
           'last_name'  => 'Miljkovic',
           'email'      => 'gojko@gmail.com',
           'password'   => Hash::make('gojko'),
           'language'   => 'srb'
            
        ));
    }
}