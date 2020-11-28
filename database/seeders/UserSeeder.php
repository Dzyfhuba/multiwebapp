<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name' => 'Hafidz',
        	'email' => 'uba21id@gmail.com',
        	'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('admin');

        $admin = User::create([
        	'name' => 'Ubaidillah',
        	'email' => '01lululili01@gmail.com',
        	'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('user');
    }
}
