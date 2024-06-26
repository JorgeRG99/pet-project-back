<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingServices extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'date',
        'external_pet_id',
        'hour',
        'user_id',
        'total_price'
    ];
}
