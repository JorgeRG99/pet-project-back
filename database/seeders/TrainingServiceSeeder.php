<?php

namespace Database\Seeders;

use App\Models\TrainingServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $booking = [
            ['date' => '2024-06-23', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '09:00:00'],
            ['date' => '2024-06-23', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '10:00:00'],
            ['date' => '2024-06-23', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '11:00:00'],
            ['date' => '2024-06-23', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '12:00:00'],
            ['date' => '2024-06-23', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '13:00:00'],

            ['date' => '2024-07-20', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '09:00:00'],
            ['date' => '2024-07-20', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '10:00:00'],
            ['date' => '2024-07-20', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '11:00:00'],
            ['date' => '2024-07-20', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '12:00:00'],
            ['date' => '2024-07-20', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '13:00:00'],

            ['date' => '2024-06-21', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '09:00:00'],
            ['date' => '2024-06-21', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '11:00:00'],
            ['date' => '2024-06-21', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '12:00:00'],
            ['date' => '2024-06-15', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '12:00:00'],
            ['date' => '2024-06-12', 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'total_price' => 100,'hour' => '12:00:00'],
        ];

        foreach ($booking as $booking) {
            TrainingServices::create($booking);
        }
    }
}
