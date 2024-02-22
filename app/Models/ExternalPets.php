<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalPets extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'external_pets';

    protected $fillable = [
        'name',
        'breed_id',
        'age',
        'gender',
        'additional_info',
        'weight'
    ];
}
