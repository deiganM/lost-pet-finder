<?php

namespace App\Http\Controllers;

use App\Models\FoundPet;
use Illuminate\Http\Request;

class FoundPetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('FoundPets/Index', [
            'foundPets' => FoundPet::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('FoundPets/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FoundPet::create($request->all());

        return redirect()->route('found');
    }

    /**
     * Display the specified resource.
     */
    public function show(FoundPet $foundPet)
    {
        return inertia('FoundPets/Show', [
            'foundPet' => $foundPet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoundPet $foundPet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FoundPet $foundPet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoundPet $foundPet)
    {
        //
    }
}
