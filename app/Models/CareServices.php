<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareServices extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'care_services';

    protected $fillable = [
        'arrive',
        'departure',
        'total_price',
        'status',
        'external_pet_id',
        'user_id',
    ];
}
