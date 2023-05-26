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
        $datosAmigos['amigos'] = Amigo::paginate(5);
        return view('amigo.index', $datosAmigos);
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
        //Recibe la informacion del formulario
        /* $datosAmigos = request()->all(); // Obtiene todos los campos */
        $datosAmigos = request()->except('_token');

        /* Insertar directamente a la base de datos */
        /* Nombre del modelo / tabla, funcion o proceso */
        Amigo::insert($datosAmigos);
        return response()->json($datosAmigos);
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
    public function edit($id)
    {
        //
        $amigo = Amigo::findOrFail($id);
        return view('amigo.edit', compact('amigo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Actualizacion de la informacion
        $datosAmigo = request()->except(['_token', '_method']);
        Amigo::where('id', '=', $id)->update($datosAmigo);

        /* Retorno al formulario */
        $amigo = Amigo::findOrFail($id);
        return view('amigo.edit', compact('amigo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Amigo::destroy($id);
        return redirect('amigos');
    }
}
