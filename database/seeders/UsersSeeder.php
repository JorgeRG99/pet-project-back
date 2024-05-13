<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333',
            'name' => 'Jorge',
            'last_name' => 'Torres',
            'password' => '12345678aA!',
            'birth_date' => '1999/12/28',
            'email' => 'megalodon621@gmail.com',
            'phone' => '666666666',
            'dni' => '31881383W',
        ]);
    }
}
