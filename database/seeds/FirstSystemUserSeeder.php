<?php

use Illuminate\Database\Seeder;

class FirstSystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin User',
            'email' => 'admin@blog.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
