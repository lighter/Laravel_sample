<?php

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'lighter',
            'username' => 'awesome',
            'email' => 'test@gmail.com',
            'password' => Hash::make('awesome'),
        ));

        User::create(array(
            'name' => 'Tom',
            'username' => 'John',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('awesome')
        ));
    }

}