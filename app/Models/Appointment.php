<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'doctor_id',
        'specialization',
        'status',
        'chat',
        'trouble',
        'connection'
    ];
}
