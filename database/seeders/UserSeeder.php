<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'     => 'Admin',
                'email'    => 'admin@gmail.com',
                'password' => '123', // Tanpa bcrypt
                'role'     => 'admin',
                'created_at' => now(),
            ],
            [
                'name'     => 'Budi',
                'email'    => 'dosen@gmail.com',
                'password' => '123', // Tanpa bcrypt
                'role'     => 'dosen',
                'created_at' => now(),
            ],
            [
                'name'     => 'Shafa',
                'email'    => 'shafa@gmail.com',
                'password' => '123', // Tanpa bcrypt
                'role'     => 'mahasiswa',
                'created_at' => now(),
            ],
        ]);
    }
}
