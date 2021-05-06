<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Nissa',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(60),

        ]);
    }
}
