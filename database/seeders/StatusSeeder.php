<?php

namespace Database\Seeders;

use App\Models\Statuses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statuses::create(["name" => "pending"]);
        Statuses::create(["name" => "accepted"]);
        Statuses::create(["name" => "confirmed"]);
        Statuses::create(["name" => "cancelled"]);
    }
}
