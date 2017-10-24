<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        {
            User::create([
                'name' => 'Wilfredo Fermin',
                'email' => 'w.fermin@clubbodyshop.com',
                'password' => bcrypt('12345')
            ]);

        }
    }
}
