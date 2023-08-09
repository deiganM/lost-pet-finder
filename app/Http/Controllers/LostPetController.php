<?php

namespace App\Http\Controllers;

use App\Models\LostPet;
use Illuminate\Http\Request;

class LostPetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('LostPets/Dashboard', [
            'lostPets' => LostPet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('LostPets/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // Route Model Binding -> shorter syntax for finding by id
    public function show(LostPet $lostPet)
    {
        return inertia( 'LostPets/Show', [
            'lostPet' => $lostPet // Same as 'listing' => Listing::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
