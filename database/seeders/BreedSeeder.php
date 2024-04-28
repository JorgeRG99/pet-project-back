<?php

namespace Database\Seeders;


use App\Models\Breed;
use Illuminate\Database\Seeder;


class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Breed::create([
            "id" => '9b63cf9b-9495-440e-884d-19bd639003b1',
            "name" => "Labrador",
            "specie_id" => 'dog',
        ]);

        Breed::create([
            "id" => '9b63cf9b-96d5-4912-805b-ba534c3add3e',
            "name" => "Pastor alemán",
            "specie_id" => 'dog',
        ]);


        // Cat breeds
        Breed::create([
            "id" => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f',
            "name" => "Siamés",
            "specie_id" => 'cat',
        ]);

        Breed::create([
            "id" => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e',
            "name" => "Persa",
            "specie_id" => 'cat',
        ]); 
    }
}
