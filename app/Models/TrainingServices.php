<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingServices extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'statuses';

    protected $fillable = [
        'scheduled_date',
        'external_pet_id',
        'worker_id',
        'status_id',
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
