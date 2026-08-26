<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'KEMET Admin',
            'email' => 'admin@kemetengineering.com',
            'password' => 'Admin@123456',
        ]);
    }
}
