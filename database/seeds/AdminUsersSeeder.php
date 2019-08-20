<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@mail.com',
            'password'  => bcrypt('password')
        ])
            ->assignRole('admin');

        User::create([
            'name'      => 'user',
            'email'     => 'user@mail.com',
            'password'  => bcrypt('password')
        ])
            ->assignRole('user');
    }
}
