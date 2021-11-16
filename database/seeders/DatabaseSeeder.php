<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \A17\Twill\Models\User::create([
            'name' => 'rob',
            'email' => 'rob@webisolv.com',
            'password' => Hash::make('webisolv'),
            'published' => 1,
            'role' => 'SUPERADMIN'
        ]);
    }
}
