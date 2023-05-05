<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "username" => 'user',
            "email" => 'user@gmail.com',
            "password" => Hash::make('user'),
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
