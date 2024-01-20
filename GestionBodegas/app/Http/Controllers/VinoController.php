<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vino;
use App\Models\Bodega;

class VinoController extends Controller
{
    public function index()
    {
        $vinos = Vino::all();
        return view('vinos.index', compact('vinos'));
    }

    public function create()
    {
        $bodegas = Bodega::all();
        return view('vinos.create', compact('bodegas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bodega_id' => 'required|exists:bodegas,id',
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'anno' => 'required|integer|min:1800|max:' . date('Y'),
            'descripcion' => 'nullable|string',
        ]);

        Vino::create($request->all());

        return redirect()->route('vinos.index')->with('success', 'Vino añadido correctamente');
    }

    public function show(Vino $vino)
    {
        return view('vinos.show', compact('vino'));
    }

    public function edit(Vino $vino)
    {
        return view('vinos.edit', compact('vino'));
    }

    public function update(Request $request, Vino $vino)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'anno' => 'required|integer|min:1800|max:' . date('Y'),
            'descripcion' => 'nullable|string',
        ]);

        $vino->update($request->all());

        return redirect()->route('vinos.index')->with('success', 'Vino actualizado correctamente');
    }

    public function destroy(Vino $vino)
    {
        $vino->delete();

        return redirect()->route('vinos.index')->with('success', 'Vino eliminado correctamente');
    }
}
