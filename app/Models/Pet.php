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
        'id',
        'name',
        'breed_id',
        'age',
        'gender',
        'additional_info',
        'date_entry',
        'weight',
        'active'
    ];

    public function adoptions()
    {
        return $this->hasMany(Adoptions::class);
    }

    public function specie()
    {
        return $this->belongsTo(Species::class);
    }
}
