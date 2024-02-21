<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'species';

    protected $fillable = [
        'specie',
        'active'
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
