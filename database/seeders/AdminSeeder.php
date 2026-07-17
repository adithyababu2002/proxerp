<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
     User::firstOrCreate([
            'name' => 'Admin User',
            'email' => 'Proxerp2026@gmail.com',
            'password' => Hash::make('#ProxErp@2026##'),
        ]);

       
    }
}