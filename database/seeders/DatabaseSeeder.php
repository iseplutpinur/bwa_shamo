<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Isep Lutpi Nur',
            'roles' => 'ADMIN',
            'email_verified_at' => '2022-02-16 17:01:46',
            'email' => 'iseplutpi1008@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
