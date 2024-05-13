<?php

namespace Database\Seeders;

use App\Models\HotelCapacity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelCapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelCapacity::create([
            "capacity" => 30,
        ]);
    }
}
