<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    use HasFactory;

    protected $table = 'statuses';

    protected $fillable = [
        'name'
    ];

    public function adoptions()
    {
        return $this->hasMany(Adoptions::class);
    }

    public function visits()
    {
        return $this->hasMany(Visits::class);
    }
}
