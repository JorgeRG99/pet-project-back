<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pets';

    protected $fillable = [
        'name',
        'species',
        'breed',
        'age',
        'gender',
        'additional_info',
        'date_entry',
        'weight'
    ];
}
