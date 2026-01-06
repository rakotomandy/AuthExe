<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\AdminLogin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash; // Needed to hash passwords

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('password123'), // Always hash passwords
        // ]);

        // Create default admin user
        AdminLogin::updateOrCreate(
            ['email' => 'admin@example.com'], // Prevent duplicates
            [
                'password' => Hash::make('admin123'), // Default admin password
            ]
        );
    }
}
