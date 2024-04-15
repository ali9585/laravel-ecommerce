<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '123456',
            'image' => asset('assets/img/avatars/admin-icon.png')
        ]);
    }
}
