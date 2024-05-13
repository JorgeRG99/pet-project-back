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
        // Dog Breeds
        $dogs = [
            ["id" => '9b63cf9b-9495-440e-884d-19bd639003b1', "name" => "Labrador", "specie_id" => 'dog'],
            ["id" => '9b63cf9b-96d5-4912-805b-ba534c3add3e', "name" => "Pastor alemán", "specie_id" => 'dog'],
            ["id" => 'a123fb30-1c5a-11ed-861d-0242ac120002', "name" => "Pastor Alemán", "specie_id" => 'dog'],
            ["id" => 'a123fb31-1c5a-11ed-861d-0242ac120002', "name" => "Labrador Retriever", "specie_id" => 'dog'],
            ["id" => 'a123fb32-1c5a-11ed-861d-0242ac120002', "name" => "Golden Retriever", "specie_id" => 'dog'],
            ["id" => 'a123fb33-1c5a-11ed-861d-0242ac120002', "name" => "Bulldog Francés", "specie_id" => 'dog'],
            ["id" => 'a123fb34-1c5a-11ed-861d-0242ac120002', "name" => "Beagle", "specie_id" => 'dog'],
            ["id" => 'a123fb35-1c5a-11ed-861d-0242ac120002', "name" => "Poodle", "specie_id" => 'dog'],
            ["id" => 'a123fb36-1c5a-11ed-861d-0242ac120002', "name" => "Rottweiler", "specie_id" => 'dog'],
            ["id" => 'a123fb37-1c5a-11ed-861d-0242ac120002', "name" => "Yorkshire Terrier", "specie_id" => 'dog'],
            ["id" => 'a123fb38-1c5a-11ed-861d-0242ac120002', "name" => "Dachshund", "specie_id" => 'dog'],
            ["id" => 'a123fb39-1c5a-11ed-861d-0242ac120002', "name" => "Boxer", "specie_id" => 'dog'],
            ["id" => 'a123fb3a-1c5a-11ed-861d-0242ac120002', "name" => "Schnauzer Miniatura", "specie_id" => 'dog'],
            ["id" => 'a123fb3b-1c5a-11ed-861d-0242ac120002', "name" => "Shih Tzu", "specie_id" => 'dog'],
            ["id" => 'a123fb3c-1c5a-11ed-861d-0242ac120002', "name" => "Bulldog Inglés", "specie_id" => 'dog'],
            ["id" => 'a123fb3d-1c5a-11ed-861d-0242ac120002', "name" => "Chihuahua", "specie_id" => 'dog'],
            ["id" => 'a123fb3e-1c5a-11ed-861d-0242ac120002', "name" => "Border Collie", "specie_id" => 'dog'],
            ["id" => 'a123fb3f-1c5a-11ed-861d-0242ac120002', "name" => "Pit Bull", "specie_id" => 'dog'],
            ["id" => 'a123fb40-1c5a-11ed-861d-0242ac120002', "name" => "Doberman", "specie_id" => 'dog'],
            ["id" => 'a123fb41-1c5a-11ed-861d-0242ac120002', "name" => "Cocker Spaniel", "specie_id" => 'dog'],
            ["id" => 'a123fb42-1c5a-11ed-861d-0242ac120002', "name" => "Akita", "specie_id" => 'dog'],
            ["id" => 'a123fb43-1c5a-11ed-861d-0242ac120002', "name" => "Mastín Napolitano", "specie_id" => 'dog'],
            ["id" => 'a123fb44-1c5a-11ed-861d-0242ac120002', "name" => "Basset Hound", "specie_id" => 'dog'],
            ["id" => 'a123fb45-1c5a-11ed-861d-0242ac120002', "name" => "Husky Siberiano", "specie_id" => 'dog'],
            ["id" => 'a123fb46-1c5a-11ed-861d-0242ac120002', "name" => "San Bernardo", "specie_id" => 'dog'],
            ["id" => 'a123fb47-1c5a-11ed-861d-0242ac120002', "name" => "Fox Terrier", "specie_id" => 'dog'],
            ["id" => 'a123fb48-1c5a-11ed-861d-0242ac120002', "name" => "Galgo", "specie_id" => 'dog'],
            ["id" => 'a123fb49-1c5a-11ed-861d-0242ac120002', "name" => "Pointer", "specie_id" => 'dog'],
            ["id" => 'a123fb4a-1c5a-11ed-861d-0242ac120002', "name" => "Setter Irlandés", "specie_id" => 'dog'],
            ["id" => 'a123fb4b-1c5a-11ed-861d-0242ac120002', "name" => "Mastín Español", "specie_id" => 'dog'],
            ["id" => 'a123fb4c-1c5a-11ed-861d-0242ac120002', "name" => "Pomerania", "specie_id" => 'dog'],
            ["id" => 'a123fb4d-1c5a-11ed-861d-0242ac120002', "name" => "Dálmata", "specie_id" => 'dog'],
            ["id" => 'a123fb4e-1c5a-11ed-861d-0242ac120002', "name" => "Samoyedo", "specie_id" => 'dog'],
            ["id" => 'a123fb4f-1c5a-11ed-861d-0242ac120002', "name" => "Terranova", "specie_id" => 'dog'],
            ["id" => 'a123fb50-1c5a-11ed-861d-0242ac120002', "name" => "Bichón Frisé", "specie_id" => 'dog'],
            ["id" => 'a123fb51-1c5a-11ed-861d-0242ac120002', "name" => "Pastor Australiano", "specie_id" => 'dog'],
            ["id" => 'a123fb52-1c5a-11ed-861d-0242ac120002', "name" => "Whippet", "specie_id" => 'dog'],
            ["id" => 'a123fb53-1c5a-11ed-861d-0242ac120002', "name" => "Shar Pei", "specie_id" => 'dog'],
            ["id" => 'a123fb54-1c5a-11ed-861d-0242ac120002', "name" => "Pastor de Shetland", "specie_id" => 'dog'],
            ["id" => 'a123fb55-1c5a-11ed-861d-0242ac120002', "name" => "Bull Terrier", "specie_id" => 'dog'],
            ["id" => 'a123fb56-1c5a-11ed-861d-0242ac120002', "name" => "Cane Corso", "specie_id" => 'dog'],
            ["id" => 'a123fb57-1c5a-11ed-861d-0242ac120002', "name" => "Collie", "specie_id" => 'dog'],
            ["id" => 'a123fb58-1c5a-11ed-861d-0242ac120002', "name" => "Papillón", "specie_id" => 'dog'],
            ["id" => 'a123fb59-1c5a-11ed-861d-0242ac120002', "name" => "Grifón de Bruselas", "specie_id" => 'dog'],
        ];

        foreach ($dogs as $dog) {
            Breed::create($dog);
        }


        // Cat breeds
        $cats = [
            ["id" => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f', "name" => "Siamés", "specie_id" => 'cat'],
            ["id" => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e', "name" => "Persa", "specie_id" => 'cat'],
            ["id" => 'cd42fb30-1c5a-11ed-861d-0242ac120002', "name" => "Abisinio", "specie_id" => 'cat'],
            ["id" => 'cd42fb31-1c5a-11ed-861d-0242ac120002', "name" => "Bobtail Americano", "specie_id" => 'cat'],
            ["id" => 'cd42fb32-1c5a-11ed-861d-0242ac120002', "name" => "Rizo Americano", "specie_id" => 'cat'],
            ["id" => 'cd42fb33-1c5a-11ed-861d-0242ac120002', "name" => "Shorthair Americano", "specie_id" => 'cat'],
            ["id" => 'cd42fb34-1c5a-11ed-861d-0242ac120002', "name" => "Wirehair Americano", "specie_id" => 'cat'],
            ["id" => 'cd42fb35-1c5a-11ed-861d-0242ac120002', "name" => "Balines", "specie_id" => 'cat'],
            ["id" => 'cd42fb36-1c5a-11ed-861d-0242ac120002', "name" => "Bengalí", "specie_id" => 'cat'],
            ["id" => 'cd42fb37-1c5a-11ed-861d-0242ac120002', "name" => "Birmano", "specie_id" => 'cat'],
            ["id" => 'cd42fb38-1c5a-11ed-861d-0242ac120002', "name" => "Bombay", "specie_id" => 'cat'],
            ["id" => 'cd42fb39-1c5a-11ed-861d-0242ac120002', "name" => "Británico de Pelo Corto", "specie_id" => 'cat'],
            ["id" => 'cd42fb3a-1c5a-11ed-861d-0242ac120002', "name" => "Burmés", "specie_id" => 'cat'],
            ["id" => 'cd42fb3b-1c5a-11ed-861d-0242ac120002', "name" => "Burmilla", "specie_id" => 'cat'],
            ["id" => 'cd42fb3c-1c5a-11ed-861d-0242ac120002', "name" => "Chartreux", "specie_id" => 'cat'],
            ["id" => 'cd42fb3d-1c5a-11ed-861d-0242ac120002', "name" => "Cornish Rex", "specie_id" => 'cat'],
            ["id" => 'cd42fb3e-1c5a-11ed-861d-0242ac120002', "name" => "Devon Rex", "specie_id" => 'cat'],
            ["id" => 'cd42fb3f-1c5a-11ed-861d-0242ac120002', "name" => "Mau Egipcio", "specie_id" => 'cat'],
            ["id" => 'cd42fb40-1c5a-11ed-861d-0242ac120002', "name" => "Europeo Burmés", "specie_id" => 'cat'],
            ["id" => 'cd42fb41-1c5a-11ed-861d-0242ac120002', "name" => "Exótico de Pelo Corto", "specie_id" => 'cat'],
            ["id" => 'cd42fb42-1c5a-11ed-861d-0242ac120002', "name" => "Havana Brown", "specie_id" => 'cat'],
            ["id" => 'cd42fb43-1c5a-11ed-861d-0242ac120002', "name" => "Himalayo", "specie_id" => 'cat'],
            ["id" => 'cd42fb44-1c5a-11ed-861d-0242ac120002', "name" => "Bobtail Japonés", "specie_id" => 'cat'],
            ["id" => 'cd42fb45-1-11ed-861d-0242ac120002', "name" => "Javanés", "specie_id" => 'cat'],
            ["id" => 'cd42fb46-1c5a-11ed-861d-0242ac120002', "name" => "Korat", "specie_id" => 'cat'],
            ["id" => 'cd42fb47-1c5a-11ed-861d-0242ac120002', "name" => "LaPerm", "specie_id" => 'cat'],
            ["id" => 'cd42fb48-1c5a-11ed-861d-0242ac120002', "name" => "Maine Coon", "specie_id" => 'cat'],
            ["id" => 'cd42fb49-1c5a-11ed-861d-0242ac120002', "name" => "Manx", "specie_id" => 'cat'],
            ["id" => 'cd42fb4a-1c5a-11ed-861d-0242ac120002', "name" => "Bosque de Noruega", "specie_id" => 'cat'],
            ["id" => 'cd42fb4b-1c5a-11ed-861d-0242ac120002', "name" => "Ocicat", "specie_id" => 'cat'],
            ["id" => 'cd42fb4c-1c5a-11ed-861d-0242ac120002', "name" => "Oriental", "specie_id" => 'cat'],
            ["id" => 'cd42fb4d-1c5a-11ed-861d-0242ac120002', "name" => "Persa", "specie_id" => 'cat'],
            ["id" => 'cd42fb4e-1c5a-11ed-861d-0242ac120002', "name" => "Ragamuffin", "specie_id" => 'cat'],
            ["id" => 'cd42fb4f-1c5a-11ed-861d-0242ac120002', "name" => "Ragdoll", "specie_id" => 'cat'],
            ["id" => 'cd42fb50-1c5a-11ed-861d-0242ac120002', "name" => "Azul Ruso", "specie_id" => 'cat'],
            ["id" => 'cd42fb51-1c5a-11ed-861d-0242ac120002', "name" => "Scottish Fold", "specie_id" => 'cat'],
            ["id" => 'cd42fb52-1c5a-11ed-861d-0242ac120002', "name" => "Selkirk Rex", "specie_id" => 'cat'],
            ["id" => 'cd42fb53-1c5a-11ed-861d-0242ac120002', "name" => "Siamés", "specie_id" => 'cat'],
            ["id" => 'cd42fb54-1c5a-11ed-861d-0242ac120002', "name" => "Siberiano", "specie_id" => 'cat'],
            ["id" => 'cd42fb55-1c5a-11ed-861d-0242ac120002', "name" => "Singapura", "specie_id" => 'cat'],
            ["id" => 'cd42fb56-1c5a-11ed-861d-0242ac120002', "name" => "Somalí", "specie_id" => 'cat'],
            ["id" => 'cd42fb57-1c5a-11ed-861d-0242ac120002', "name" => "Sphynx", "specie_id" => 'cat'],
            ["id" => 'cd42fb58-1c5a-11ed-861d-0242ac120002', "name" => "Tonkinés", "specie_id" => 'cat'],
            ["id" => 'cd42fb59-1c5a-11ed-861d-0242ac120002', "name" => "Toyger", "specie_id" => 'cat'],
            ["id" => 'cd42fb5a-1c5a-11ed-861d-0242ac120002', "name" => "Turco Angora", "specie_id" => 'cat']
        ];

        foreach ($cats as $cat) {
            Breed::create($cat);
        }
    }
}
