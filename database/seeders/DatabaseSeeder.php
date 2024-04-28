<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(SpecieSeeder::class);
        $this->call(BreedSeeder::class);
        $this->call(PetSeeder::class);
    }
}
