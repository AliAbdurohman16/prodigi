<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('superadmin1234'),
        ]);

        $superadmin->assignRole('superadmin');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin1234'),
        ]);

        $admin->assignRole('admin');
    }
}
