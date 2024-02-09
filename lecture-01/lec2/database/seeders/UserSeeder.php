<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@web.com',
            'password' => 'Admin123'
        ]);
        DB::table('users')->insert([
            'name' => 'super admin',
            'email' => 'super@web.com',
            'password' => 'Super123'
        ]);
        DB::table('users')->insert([
            'name' => 'omar',
            'email' => 'superomar@web.com',
            'password' => 'Super123'
        ]);
        DB::table('users')->insert([
            'name' => 'karim',
            'email' => 'superkarim@web.com',
            'password' => 'Super123'
        ]);
    }
}
