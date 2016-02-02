<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use User;
 
class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        User::create([
            'first_name' => 'System',
            'last_name'  => 'Administrator',
            'username'   => 'admin',
            'email'      => 'master@domain.com',
            'password'   =>  Hash::make('secret')
        ]);
    }
 
}
