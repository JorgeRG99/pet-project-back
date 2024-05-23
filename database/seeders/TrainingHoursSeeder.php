<?php

namespace Database\Seeders;

use App\Models\TrainingHours;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hours = ['09:00', '10:00', '11:00', '12:00', '13:00'];

        foreach ($hours as $hour) {
            TrainingHours::create(['hour' => $hour]);
        }
    }
}
