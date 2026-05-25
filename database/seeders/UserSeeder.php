<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // MASTER
        User::create([
            'name' => 'Master Wu',
            'email' => 'master@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'master',
        ]);

        // NINJA
        User::create([
            'name' => 'Cikalganteng',
            'email' => 'ninja@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'ninja',
        ]);

    }
}