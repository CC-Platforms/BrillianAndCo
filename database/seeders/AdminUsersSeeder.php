<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the two admin users
        $adminUsers = [
            [
                'name' => 'Brillian',
                'email' => 'bricore161@gmail.com',
                'password' => 'Brillian@1234567',
            ],
            [
                'name' => 'Md Christien',
                'email' => 'mesuehchristian12@gmail.com',
                'password' => 'Md@christien123',
            ]
        ];

        foreach ($adminUsers as $userData) {
            // Check if user already exists
            $existingUser = User::where('email', $userData['email'])->first();
            
            if (!$existingUser) {
                User::create([
                    'name' => $userData['name'],
                    'email' => $userData['email'],
                    'email_verified_at' => now(), // Mark as verified
                    'password' => Hash::make($userData['password']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                
                $this->command->info("Created admin user: {$userData['name']} ({$userData['email']})");
            } else {
                $this->command->warn("User {$userData['email']} already exists, skipping...");
            }
        }
    }
}
