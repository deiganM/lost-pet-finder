<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // dm: This is allowing Mass Assignment
    protected $fillable = [
        'beds','baths', 'area', 'city', 'code', 'street', 'street_nr', 'price'      
    ];
}
