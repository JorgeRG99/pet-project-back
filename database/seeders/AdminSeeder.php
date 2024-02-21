<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create(
            [
                "name" => "admin",
                "last_name" => "admin",
                "birth_date" => "1999/12/28",
                "phone" => "666666666",
                "dni" => "31882383W",
                'email' => 'admin@admin.com',
                'password' => '12345678',
                'role' => 'worker'
            ]
        );
    }
}
