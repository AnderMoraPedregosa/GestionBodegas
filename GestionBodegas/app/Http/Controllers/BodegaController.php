<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;

class BodegaController extends Controller
{
    public function index()
    {
        $bodegas = Bodega::all();
        return view('bodegas.index', compact('bodegas'));
    }

    public function create()
    {
        return view('bodegas.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'email' => 'required|email|unique:bodegas,email',
            'telefono' => 'required|string|max:20',
            'persona_contacto' => 'required|string|max:255',
            'anno_fundacion' => 'required|integer|min:1800|max:' . date('Y'),
            'comentarios' => 'nullable|string',
            'tiene_restaurante' => 'boolean',
            'tiene_hotel' => 'boolean',

        ]);

        try {
            Bodega::create($request->all());
            return redirect()->route('bodegas.index')->with('success', 'Bodega creada correctamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al crear la bodega: ' . $e->getMessage());
        }
    }

    public function show(Bodega $bodega)
    {
        return view('bodegas.show', compact('bodega'));
    }

    public function edit(Bodega $bodega)
    {
        return view('bodegas.edit', compact('bodega'));
    }

    public function update(Request $request, Bodega $bodega)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'email' => 'required|email|unique:bodegas,email,' . $bodega->id,
            'telefono' => 'required|string|max:20',
            'persona_contacto' => 'required|string|max:255',
            'anno_fundacion' => 'required|integer|min:1800|max:' . date('Y'),
            'comentarios' => 'nullable|string',
            'tiene_restaurante' => 'boolean',
            'tiene_hotel' => 'boolean',

        ]);

        $bodega->update($request->all());

        return redirect()->route('bodegas.index')->with('success', 'Bodega actualizada correctamente');
    }

    public function destroy(Bodega $bodega)
    {
        $bodega->delete();

        return redirect()->route('bodegas.index')->with('success', 'Bodega eliminada correctamente');
    }
}
