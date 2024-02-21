<?php

namespace Database\Seeders;


use App\Models\Species;
use Illuminate\Database\Seeder;


class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Species::create(
            [
                "specie" => "dog",
            ]
        );
        Species::create(
            [
                "specie" => "cat",
            ]
        );
    }
}
