<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostPet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'sex',
        'status',
        'physical_description',
        'message',
        'last_seen_date',
        'last_known_location',
        'cross_street',
        'nearest_landmark',
        'microchip_no',
        'tattoo',
        'age',
    ];
}
