<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
Use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('rahasia123'),
        ]);

    }
}