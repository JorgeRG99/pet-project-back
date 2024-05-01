<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pets = [
            ['id' => '9b63cf9b-9495-440e-884d-19bd639003b2', 'name' => 'Cooper', 'age' => 13, 'weight' => '13.53 kg', 'gender' => 'male', 'additional_info' => 'Necesita ejercicios diarios y disfruta mucho de los juegos al aire libre. Amigable y sociable con otros perros.', 'date_entry' => '2024-04-10', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '9b63cf9b-96d5-4912-805b-ba534c3add3f', 'name' => 'Lucy', 'age' => 7, 'weight' => '9.37 kg', 'gender' => 'female', 'additional_info' => 'Prefiere una dieta rica en proteínas, muy activa y juguetona, ideal para familias con niños.', 'date_entry' => '2024-04-05', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f', 'name' => 'Coco', 'age' => 1, 'weight' => '12.44 kg', 'gender' => 'male', 'additional_info' => 'Cachorro enérgico, necesita atención constante y entrenamiento temprano para socialización.', 'date_entry' => '2024-04-2', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e', 'name' => 'Bailey', 'age' => 12, 'weight' => '12.11 kg', 'gender' => 'female', 'additional_info' => 'Senior que disfruta de paseos tranquilos, necesita chequeos veterinarios regulares debido a su edad.', 'date_entry' => '2024-04-20', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '9b63cf9b-9495-440e-884d-19bd639003b3', 'name' => 'Daisy', 'age' => 3, 'weight' => '19.29 kg', 'gender' => 'female', 'additional_info' => 'Muy protectora y leal, ideal para ser perro guardián. Necesita entrenamiento para manejar su temperamento.', 'date_entry' => '2023-02-20', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e', 'name' => 'Zoe', 'age' => 2, 'weight' => '11.00 kg', 'gender' => 'female', 'additional_info' => 'Amable y fácil de entrenar. Adora las sesiones de juego y es muy sociable con otros animales.', 'date_entry' => '2024-02-28', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8m', 'name' => 'Lucy', 'age' => 5, 'weight' => '19.25 kg', 'gender' => 'female', 'additional_info' => 'Inteligente y obediente, se destaca en obediencia y agility. Necesita ejercicio mental y físico diario.', 'date_entry' => '2022-02-12', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8z', 'name' => 'Ruby', 'age' => 2, 'weight' => '14.89 kg', 'gender' => 'male', 'additional_info' => 'Curioso y aventurero, ideal para dueños activos. Tiene una gran necesidad de explorar nuevos ambientes.', 'date_entry' => '2022-04-28', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '9b63cf9b-9495-440e-884d-19bd639003b6', 'name' => 'Pepa', 'age' => 2, 'weight' => '14.09 kg', 'gender' => 'female', 'additional_info' => 'Jovial y cariñosa, siempre lista para jugar y recibir atención. Se lleva bien con niños y otros animales, perfecta para un hogar dinámico.', 'date_entry' => '2024-04-28', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '9b63cf9b-9495-440e-884d-19bd639003b4', 'name' => 'Max', 'age' => 4, 'weight' => '7.99 kg', 'gender' => 'male', 'additional_info' => 'Muy cariñoso. Requiere mucho ejercicio. Ideal para casas grandes. Necesita espacio para correr.', 'date_entry' => '2023-01-12', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '9b63cf9b-96d5-4912-805b-ba534c3add3k', 'name' => 'Thor', 'age' => 2, 'weight' => '11.43 kg', 'gender' => 'male', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita espacio para correr.', 'date_entry' => '2022-03-28', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8g', 'name' => 'Max', 'age' => 9, 'weight' => '19.01 kg', 'gender' => 'male', 'additional_info' => 'Muy tranquilo. Requiere poco ejercicio. Ideal para casas grandes. Necesita muchos mimos.', 'date_entry' => '2022-05-28', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8h', 'name' => 'Cleo', 'age' => 8, 'weight' => '18.28 kg', 'gender' => 'female', 'additional_info' => 'Muy tranquilo. Requiere poco ejercicio. Ideal para casas grandes. Necesita muchos mimos.', 'date_entry' => '2024-03-28', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8i', 'name' => 'Cooper', 'age' => 5, 'weight' => '5.99 kg', 'gender' => 'female', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.', 'date_entry' => '2023-02-28', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8j', 'name' => 'Milo', 'age' => 9, 'weight' => '7.77 kg', 'gender' => 'male', 'additional_info' => 'Muy tranquilo. Requiere mucho ejercicio. Ideal para apartamentos. Necesita muchos mimos.', 'date_entry' => '2021-04-12', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8k', 'name' => 'Luna', 'age' => 7, 'weight' => '18.77 kg', 'gender' => 'female', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.', 'date_entry' => '2021-02-05', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8l', 'name' => 'Charlie', 'age' => 6, 'weight' => '12.96 kg', 'gender' => 'male', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.', 'date_entry' => '2024-04-02', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
        ];

        foreach ($pets as $pet) {
            Pet::create($pet);
        }
    }
}
