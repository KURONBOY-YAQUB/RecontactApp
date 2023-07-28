<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'Manager',
            'email' => 'manager@mail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Candidate Test',
            'email' => 'candidate@mail.com',
            'password' => Hash::make('password')
        ]);
    }
}
