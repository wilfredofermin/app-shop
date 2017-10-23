<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            User::create([
                'name' => 'Wilfredo Fermin',
                'email' => 'w.fermin@clubbodyshop.com',
                'password' => bcrypt('12345')]);

        }
    }
}
