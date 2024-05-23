<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingHours extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'hour',
    ];
}
