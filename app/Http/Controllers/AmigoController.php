<?php

namespace App\Http\Controllers;

use App\Models\Amigo;
use Illuminate\Http\Request;

class AmigoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Informacion de la vista
        return view('amigo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Informacion de la vista
        return view('amigo.create');
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
    public function show(Amigo $amigo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amigo $amigo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Amigo $amigo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amigo $amigo)
    {
        //
    }
}
