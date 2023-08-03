<?php

namespace App\Http\Controllers;

use App\Models\LostPet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Dashboard', [
            'lostPets' => LostPet::all()
        ]);
    }
}
