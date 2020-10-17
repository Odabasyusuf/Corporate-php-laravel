<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yusuf',
            'email' => 'yusuf@asdf.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Ali',
            'email' => 'ali@asdf.com',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Veli',
            'email' => 'veli@asdf.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
