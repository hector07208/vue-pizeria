<?php


namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::all();
        return view('branches.index', compact('branches'));
    }

    public function create()
    {
        return view('branches.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        
        Branch::create($request->only(['name', 'address']));
        return redirect()->route('branches.index')->with('success', 'Sucursal creada con éxito.');
    }

    public function edit(Branch $branch)
    {
        return view('branches.edit', compact('branch'));
    }

    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        
        $branch->update($request->only(['name', 'address']));
        return redirect()->route('branches.index')->with('success', 'Sucursal actualizada con éxito.');
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branches.index')->with('success', 'Sucursal eliminada con éxito.');
    }
}
