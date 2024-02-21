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
            "name" => "Labrador",
            "specie_id" => '9b63cf9b-9495-440e-884d-19bd639003b1',
        ]);

        Breed::create([
            "name" => "German Shepherd",
            "specie_id" => '9b63cf9b-9495-440e-884d-19bd639003b1',
        ]);


        // Cat breeds
        Breed::create([
            "name" => "Siamese",
            "specie_id" => '9b63cf9b-96d5-4912-805b-ba534c3add3e',
        ]);

        Breed::create([
            "name" => "Persian",
            "specie_id" => '9b63cf9b-96d5-4912-805b-ba534c3add3e',
        ]); 
    }
}
//Dog -> Specie_id ->9b63cf9b-9495-440e-884d-19bd639003b1
//Cat -> Specie_id ->9b63cf9b-96d5-4912-805b-ba534c3add3e 
