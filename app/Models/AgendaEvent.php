<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaEvent extends Model
{
    protected $fillable = [
        'title',
        'location',
        'event_date',
        'time',
        'description',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];
}
