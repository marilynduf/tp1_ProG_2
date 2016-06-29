<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'login'     => 'Marilduffy',
            'email'    => 'maril@exemplecomo',
            'password' => Hash::make('123456'),
        ));
    }

}