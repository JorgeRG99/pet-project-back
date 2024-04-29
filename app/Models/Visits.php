<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory, HasUuids;
    
    protected $table = 'visits';

    protected $fillable = [
        'user_id',
        'pet_id',
        'scheduled_date',
        'status_id'
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
        return $this->belongsTo(Statuses::class);
    }
}
