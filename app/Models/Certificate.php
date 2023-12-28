<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'name',
        'doctor',
        'address',
        'description',
        'started_at',
        'archived',
        'confirmed',
    ];
}
