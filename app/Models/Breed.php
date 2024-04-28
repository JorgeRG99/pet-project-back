<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'breeds';

    protected $fillable = [
        'name',
        'specie_id',
        'active',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function specie()
    {
        return $this->belongsTo(Species::class);
    }
}
