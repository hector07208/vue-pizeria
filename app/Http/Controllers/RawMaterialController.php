<?php


namespace App\Http\Controllers;

use App\Models\RawMaterial;
use Illuminate\Http\Request;

class RawMaterialController extends Controller
{
    public function index()
    {
        $materials = RawMaterial::all();
        return view('raw_materials.index', compact('materials'));
    }

    public function create()
    {
        return view('raw_materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'unit' => 'required|string|max:50',
        ]);

        RawMaterial::create($request->all());
        return redirect()->route('raw_materials.index')->with('success', 'Materia prima creada con éxito.');
    }

    public function edit(RawMaterial $rawMaterial)
    {
        return view('raw_materials.edit', compact('rawMaterial'));
    }

    public function update(Request $request, RawMaterial $rawMaterial)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
        ]);

        $rawMaterial->update($request->all());
        return redirect()->route('raw_materials.index')->with('success', 'Materia prima actualizada con éxito.');
    }

    public function destroy(RawMaterial $rawMaterial)
    {
        $rawMaterial->delete();
        return redirect()->route('raw_materials.index')->with('success', 'Materia prima eliminada con éxito.');
    }
}
