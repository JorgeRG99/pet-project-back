<?php

namespace Database\Seeders;

use App\Models\ExternalPets;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalPetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pets = [
            ['id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'name' => 'Cooper', 'age' => 13, 'weight' => '13.53', 'gender' => 'male', 'additional_info' => 'Necesita ejercicios diarios y disfruta mucho de los juegos al aire libre. Amigable y sociable con otros perros.', 'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => 'ce3354d3-51c2-4f32-9b95-e3c0f87e4a20', 'name' => 'Lucy', 'age' => 7, 'weight' => '9.37', 'gender' => 'female', 'additional_info' => 'Prefiere una dieta rica en proteínas, muy activa y juguetona, ideal para familias con niños.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '8c469e43-66e5-4158-9fa8-bc811a90af2c', 'name' => 'Coco', 'age' => 1, 'weight' => '12.44', 'gender' => 'male', 'additional_info' => 'Cachorro enérgico, necesita atención constante y entrenamiento temprano para socialización.', 'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => 'b354111b-5835-479c-93b1-bb5cc23d7c24', 'name' => 'Bailey', 'age' => 12, 'weight' => '12.11', 'gender' => 'female', 'additional_info' => 'Senior que disfruta de paseos tranquilos, necesita chequeos veterinarios regulares debido a su edad.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => 'd77f6ac1-1a7c-46c8-bd78-9377bd102f58', 'name' => 'Daisy', 'age' => 3, 'weight' => '19.29', 'gender' => 'female', 'additional_info' => 'Muy protectora y leal, ideal para ser perro guardián. Necesita entrenamiento para manejar su temperamento.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '0be1689f-9b9a-4b84-a455-fad009e9670c', 'name' => 'Zoe', 'age' => 2, 'weight' => '11.00', 'gender' => 'female', 'additional_info' => 'Amable y fácil de entrenar. Adora las sesiones de juego y es muy sociable con otros animales.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '1f46fa08-477a-465d-a18f-fe1363346f3b', 'name' => 'Lucy', 'age' => 5, 'weight' => '19.25', 'gender' => 'female', 'additional_info' => 'Inteligente y obediente, se destaca en obediencia y agility. Necesita ejercicio mental y físico diario.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '40d3eb80-3964-4b0b-934b-413c2546e82a', 'name' => 'Ruby', 'age' => 2, 'weight' => '14.89', 'gender' => 'male', 'additional_info' => 'Curioso y aventurero, ideal para dueños activos. Tiene una gran necesidad de explorar nuevos ambientes.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => 'a86c1ee2-c096-4dca-85be-4fc88ec9d9d5', 'name' => 'Pepa', 'age' => 2, 'weight' => '14.09', 'gender' => 'female', 'additional_info' => 'Jovial y cariñosa, siempre lista para jugar y recibir atención. Se lleva bien con niños y otros animales, perfecta para un hogar dinámico.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '8d3d5708-9292-44cc-80f5-4173bde4319e', 'name' => 'Max', 'age' => 4, 'weight' => '7.99', 'gender' => 'male', 'additional_info' => 'Muy cariñoso. Requiere mucho ejercicio. Ideal para casas grandes. Necesita espacio para correr.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => 'f46d47ae-e7fc-49ad-a55c-8150e1ce057f', 'name' => 'Thor', 'age' => 2, 'weight' => '11.43', 'gender' => 'male', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita espacio para correr.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '6d32eb0b-7af4-48cd-826a-5b3a507625e4', 'name' => 'Max', 'age' => 9, 'weight' => '19.01', 'gender' => 'male', 'additional_info' => 'Muy tranquilo. Requiere poco ejercicio. Ideal para casas grandes. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '92465f44-f844-4eab-a64b-a31069769d03', 'name' => 'Cleo', 'age' => 8, 'weight' => '18.28', 'gender' => 'female', 'additional_info' => 'Muy tranquilo. Requiere poco ejercicio. Ideal para casas grandes. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => '2f0fa052-1acb-4973-8da6-497eda29287d', 'name' => 'Cooper', 'age' => 5, 'weight' => '5.99', 'gender' => 'female', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => 'a54f9a6b-5446-4a4d-a794-06a208c79e0f', 'name' => 'Milo', 'age' => 9, 'weight' => '7.77', 'gender' => 'male', 'additional_info' => 'Muy tranquilo. Requiere mucho ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => 'd07df748-f480-4001-bd68-8dcea9c84d9d', 'name' => 'Luna', 'age' => 7, 'weight' => '18.77', 'gender' => 'female', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => 'a53e5e14-e2f0-4d2b-8008-4d73371589d0', 'name' => 'Charlie', 'age' => 6, 'weight' => '12.96', 'gender' => 'male', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],


            ['id' => '7e5d7a78-1659-44f6-82cb-31465fd222a3', 'name' => 'Cooper', 'age' => 13, 'weight' => '13.53', 'gender' => 'male', 'additional_info' => 'Necesita ejercicios diarios y disfruta mucho de los juegos al aire libre. Amigable y sociable con otros perros.', 'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '790848cc-e6e4-424f-97e2-7710ed6df9c9', 'name' => 'Lucy', 'age' => 7, 'weight' => '9.37', 'gender' => 'female', 'additional_info' => 'Prefiere una dieta rica en proteínas, muy activa y juguetona, ideal para familias con niños.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '262e5037-646c-45ba-8bd8-f5350e115b7e', 'name' => 'Coco', 'age' => 1, 'weight' => '12.44', 'gender' => 'male', 'additional_info' => 'Cachorro enérgico, necesita atención constante y entrenamiento temprano para socialización.', 'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '7c0055a0-7f28-4ae2-8a01-b9aff831c087', 'name' => 'Bailey', 'age' => 12, 'weight' => '12.11', 'gender' => 'female', 'additional_info' => 'Senior que disfruta de paseos tranquilos, necesita chequeos veterinarios regulares debido a su edad.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9495-440e-884d-19bd639003b1'],
            ['id' => '1bc95447-be7d-4a23-bc1a-9ed1956b3fb4', 'name' => 'Daisy', 'age' => 3, 'weight' => '19.29', 'gender' => 'female', 'additional_info' => 'Muy protectora y leal, ideal para ser perro guardián. Necesita entrenamiento para manejar su temperamento.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '1f1a392e-6aa8-483a-935e-5d9ecc2d077c', 'name' => 'Zoe', 'age' => 2, 'weight' => '11.00', 'gender' => 'female', 'additional_info' => 'Amable y fácil de entrenar. Adora las sesiones de juego y es muy sociable con otros animales.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '09af0a0c-0bcb-4b6d-a318-2f06f24dc1fb', 'name' => 'Lucy', 'age' => 5, 'weight' => '19.25', 'gender' => 'female', 'additional_info' => 'Inteligente y obediente, se destaca en obediencia y agility. Necesita ejercicio mental y físico diario.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '5803b47c-6db4-4418-a2e5-3c6ef9a9f2c4', 'name' => 'Ruby', 'age' => 2, 'weight' => '14.89', 'gender' => 'male', 'additional_info' => 'Curioso y aventurero, ideal para dueños activos. Tiene una gran necesidad de explorar nuevos ambientes.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-96d5-4912-805b-ba534c3add3e'],
            ['id' => '7b02d43b-a725-4bc0-90f1-b185f55337c5', 'name' => 'Pepa', 'age' => 2, 'weight' => '14.09', 'gender' => 'female', 'additional_info' => 'Jovial y cariñosa, siempre lista para jugar y recibir atención. Se lleva bien con niños y otros animales, perfecta para un hogar dinámico.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '4b30f895-d96f-47c9-bf87-e1d13d4b925e', 'name' => 'Max', 'age' => 4, 'weight' => '7.99', 'gender' => 'male', 'additional_info' => 'Muy cariñoso. Requiere mucho ejercicio. Ideal para casas grandes. Necesita espacio para correr.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '46a21c87-b158-491d-a0f9-6c8a225dd8ea', 'name' => 'Thor', 'age' => 2, 'weight' => '11.43', 'gender' => 'male', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita espacio para correr.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => '6072bfa7-02b8-44c5-91fb-b8130dd9700a', 'name' => 'Max', 'age' => 9, 'weight' => '19.01', 'gender' => 'male', 'additional_info' => 'Muy tranquilo. Requiere poco ejercicio. Ideal para casas grandes. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8f'],
            ['id' => 'c8168894-55ea-401d-a37f-d14f4e2afc68', 'name' => 'Cleo', 'age' => 8, 'weight' => '18.28', 'gender' => 'female', 'additional_info' => 'Muy tranquilo. Requiere poco ejercicio. Ideal para casas grandes. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => 'c2cf8e11-b1ba-4d42-a54d-0ace68d48c50', 'name' => 'Cooper', 'age' => 5, 'weight' => '5.99', 'gender' => 'female', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => '08b08f72-8309-4230-944f-846d83e994e9', 'name' => 'Milo', 'age' => 9, 'weight' => '7.77', 'gender' => 'male', 'additional_info' => 'Muy tranquilo. Requiere mucho ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => '28f00ab1-5eb5-43f0-99c4-3c4df87b0814', 'name' => 'Luna', 'age' => 7, 'weight' => '18.77', 'gender' => 'female', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e'],
            ['id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'name' => 'Charlie', 'age' => 6, 'weight' => '12.96', 'gender' => 'male', 'additional_info' => 'Muy activo. Requiere poco ejercicio. Ideal para apartamentos. Necesita muchos mimos.',  'owner_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333', 'breed_id' => '9b63cf9b-9a9d-4f5d-8f0b-7c8f7b9d7d8e']
        ];

        foreach ($pets as $pet) {
            ExternalPets::create($pet);
        }
    }
}