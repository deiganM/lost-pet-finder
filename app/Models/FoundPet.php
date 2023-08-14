<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundPet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'sex',
        // 'physical_description',
        'message',
        // 'last_seen_date',
        // 'last_known_location',
        'age',
    ];
}
