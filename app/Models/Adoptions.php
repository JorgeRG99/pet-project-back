<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Adoptions extends Model
{
    use HasFactory, HasUuids, HasApiTokens;

    protected $table = 'adoptions';

    protected $fillable = [
        'pet_id',
        'user_id',
        'status_id',
        'adoption_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
