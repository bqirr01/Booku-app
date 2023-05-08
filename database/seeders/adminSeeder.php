<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            "username" => 'basya',
            "password" => Hash::make('basya'),
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}

