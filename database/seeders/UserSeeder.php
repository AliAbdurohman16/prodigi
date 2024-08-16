<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::create([
            'id' => (string) Str::uuid(),
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('superadmin1234'),
        ]);

        $superadmin->assignRole('superadmin');

        $admin = User::create([
            'id' => (string) Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin1234'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'id' => (string) Str::uuid(),
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user1234'),
        ]);

        $user->assignRole('user');
    }
}
