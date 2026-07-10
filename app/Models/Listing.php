<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'type',
        'name',
        'category',
        'description',
        'image_url',
        'contact',
        'location',
    ];
}
