<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'id' => Str::uuid(),
            'name' => 'Super Admin',
            'email' => 'admin@guidivo.com',
            'password' => Hash::make('Admin@123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
