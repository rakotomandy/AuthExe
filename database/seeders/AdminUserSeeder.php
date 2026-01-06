<?php

namespace Database\Seeders;

use App\Models\AdminLogin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Make sure this is your User model

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create default admin user
        AdminLogin::updateOrCreate(
            ['email' => 'admin@example.com'], // Unique identifier to prevent duplicates
            [
                'password' => Hash::make('password123'), // Always hash passwords
            ]
        );
    }
}
