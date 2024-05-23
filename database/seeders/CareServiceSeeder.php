<?php

namespace Database\Seeders;

use App\Models\CareServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'ce3354d3-51c2-4f32-9b95-e3c0f87e4a20', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '8c469e43-66e5-4158-9fa8-bc811a90af2c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'b354111b-5835-479c-93b1-bb5cc23d7c24', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'd77f6ac1-1a7c-46c8-bd78-9377bd102f58', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '0be1689f-9b9a-4b84-a455-fad009e9670c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '1f46fa08-477a-465d-a18f-fe1363346f3b', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '40d3eb80-3964-4b0b-934b-413c2546e82a', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'a86c1ee2-c096-4dca-85be-4fc88ec9d9d5', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '8d3d5708-9292-44cc-80f5-4173bde4319e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'f46d47ae-e7fc-49ad-a55c-8150e1ce057f', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '6d32eb0b-7af4-48cd-826a-5b3a507625e4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '92465f44-f844-4eab-a64b-a31069769d03', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '2f0fa052-1acb-4973-8da6-497eda29287d', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'a54f9a6b-5446-4a4d-a794-06a208c79e0f', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'd07df748-f480-4001-bd68-8dcea9c84d9d', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'a53e5e14-e2f0-4d2b-8008-4d73371589d0', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '7e5d7a78-1659-44f6-82cb-31465fd222a3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '790848cc-e6e4-424f-97e2-7710ed6df9c9', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '262e5037-646c-45ba-8bd8-f5350e115b7e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '7c0055a0-7f28-4ae2-8a01-b9aff831c087', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '1bc95447-be7d-4a23-bc1a-9ed1956b3fb4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '1f1a392e-6aa8-483a-935e-5d9ecc2d077c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '09af0a0c-0bcb-4b6d-a318-2f06f24dc1fb', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '5803b47c-6db4-4418-a2e5-3c6ef9a9f2c4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '7b02d43b-a725-4bc0-90f1-b185f55337c5', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '4b30f895-d96f-47c9-bf87-e1d13d4b925e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '46a21c87-b158-491d-a0f9-6c8a225dd8ea', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '6072bfa7-02b8-44c5-91fb-b8130dd9700a', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'c8168894-55ea-401d-a37f-d14f4e2afc68', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'c2cf8e11-b1ba-4d42-a54d-0ace68d48c50', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '08b08f72-8309-4230-944f-846d83e994e9', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => '28f00ab1-5eb5-43f0-99c4-3c4df87b0814', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-15', 'departure' => '2024-05-30', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            
            
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'ce3354d3-51c2-4f32-9b95-e3c0f87e4a20', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '8c469e43-66e5-4158-9fa8-bc811a90af2c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'b354111b-5835-479c-93b1-bb5cc23d7c24', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'd77f6ac1-1a7c-46c8-bd78-9377bd102f58', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '0be1689f-9b9a-4b84-a455-fad009e9670c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '1f46fa08-477a-465d-a18f-fe1363346f3b', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '40d3eb80-3964-4b0b-934b-413c2546e82a', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'a86c1ee2-c096-4dca-85be-4fc88ec9d9d5', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '8d3d5708-9292-44cc-80f5-4173bde4319e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'f46d47ae-e7fc-49ad-a55c-8150e1ce057f', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '6d32eb0b-7af4-48cd-826a-5b3a507625e4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '92465f44-f844-4eab-a64b-a31069769d03', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '2f0fa052-1acb-4973-8da6-497eda29287d', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'a54f9a6b-5446-4a4d-a794-06a208c79e0f', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'd07df748-f480-4001-bd68-8dcea9c84d9d', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'a53e5e14-e2f0-4d2b-8008-4d73371589d0', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '7e5d7a78-1659-44f6-82cb-31465fd222a3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '790848cc-e6e4-424f-97e2-7710ed6df9c9', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '262e5037-646c-45ba-8bd8-f5350e115b7e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '7c0055a0-7f28-4ae2-8a01-b9aff831c087', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '1bc95447-be7d-4a23-bc1a-9ed1956b3fb4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '1f1a392e-6aa8-483a-935e-5d9ecc2d077c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '09af0a0c-0bcb-4b6d-a318-2f06f24dc1fb', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '5803b47c-6db4-4418-a2e5-3c6ef9a9f2c4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '7b02d43b-a725-4bc0-90f1-b185f55337c5', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '4b30f895-d96f-47c9-bf87-e1d13d4b925e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '46a21c87-b158-491d-a0f9-6c8a225dd8ea', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '6072bfa7-02b8-44c5-91fb-b8130dd9700a', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'c8168894-55ea-401d-a37f-d14f4e2afc68', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'c2cf8e11-b1ba-4d42-a54d-0ace68d48c50', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '08b08f72-8309-4230-944f-846d83e994e9', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => '28f00ab1-5eb5-43f0-99c4-3c4df87b0814', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-06-05', 'departure' => '2024-06-09', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            
            
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'de11a80f-0410-40ab-80ef-ec9987f9d8b3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'ce3354d3-51c2-4f32-9b95-e3c0f87e4a20', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '8c469e43-66e5-4158-9fa8-bc811a90af2c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'b354111b-5835-479c-93b1-bb5cc23d7c24', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'd77f6ac1-1a7c-46c8-bd78-9377bd102f58', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '0be1689f-9b9a-4b84-a455-fad009e9670c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '1f46fa08-477a-465d-a18f-fe1363346f3b', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '40d3eb80-3964-4b0b-934b-413c2546e82a', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'a86c1ee2-c096-4dca-85be-4fc88ec9d9d5', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '8d3d5708-9292-44cc-80f5-4173bde4319e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'f46d47ae-e7fc-49ad-a55c-8150e1ce057f', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '6d32eb0b-7af4-48cd-826a-5b3a507625e4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '92465f44-f844-4eab-a64b-a31069769d03', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '2f0fa052-1acb-4973-8da6-497eda29287d', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'a54f9a6b-5446-4a4d-a794-06a208c79e0f', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'd07df748-f480-4001-bd68-8dcea9c84d9d', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'a53e5e14-e2f0-4d2b-8008-4d73371589d0', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '7e5d7a78-1659-44f6-82cb-31465fd222a3', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '790848cc-e6e4-424f-97e2-7710ed6df9c9', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '262e5037-646c-45ba-8bd8-f5350e115b7e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '7c0055a0-7f28-4ae2-8a01-b9aff831c087', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '1bc95447-be7d-4a23-bc1a-9ed1956b3fb4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '1f1a392e-6aa8-483a-935e-5d9ecc2d077c', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '09af0a0c-0bcb-4b6d-a318-2f06f24dc1fb', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '5803b47c-6db4-4418-a2e5-3c6ef9a9f2c4', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '7b02d43b-a725-4bc0-90f1-b185f55337c5', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '4b30f895-d96f-47c9-bf87-e1d13d4b925e', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '46a21c87-b158-491d-a0f9-6c8a225dd8ea', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '6072bfa7-02b8-44c5-91fb-b8130dd9700a', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'c8168894-55ea-401d-a37f-d14f4e2afc68', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'c2cf8e11-b1ba-4d42-a54d-0ace68d48c50', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '08b08f72-8309-4230-944f-846d83e994e9', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => '28f00ab1-5eb5-43f0-99c4-3c4df87b0814', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-07-12', 'departure' => '2024-07-14', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-10', 'departure' => '2024-05-14', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-10', 'departure' => '2024-05-12', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-12', 'departure' => '2024-05-17', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-07', 'departure' => '2024-05-12', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
            ['arrive' => '2024-05-07', 'departure' => '2024-05-10', 'total_price' => 100, 'external_pet_id' => 'e4496742-2aa2-4dcd-b4f4-28ea5234c393', 'user_id' => '946f20c2-557c-46b4-80ab-1fd0a28f1333'],
        ];
        
        foreach ($bookings as $booking) {
            CareServices::create($booking);
        }
    }
}
