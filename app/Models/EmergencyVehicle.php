<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmergencyVehicle extends Model
{
    protected $fillable = [
        'name',
        'status',
        'phone',
        'notes',
        'availability',
    ];

    protected $casts = [
        'availability' => 'boolean',
    ];
}
