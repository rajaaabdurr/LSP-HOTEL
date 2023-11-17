<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nama'     => 'Administrator',
            'username'    => 'admin',
            'role'    => 'admin',
            'password' => bcrypt('password'),
        ]);
    
        Admin::create([
            'nama'     => 'Resepsionis',
            'username'    => 'resepsionis',
            'role'    => 'resepsionis',
            'password' => bcrypt('password'),
        ]);
    
        Admin::create([
            'nama'     => 'raja syah',
            'username'    => 'raja',
            'role'    => 'resepsionis',
            'password' => bcrypt('password'),
        ]);
    }
}
