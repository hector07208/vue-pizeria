<?php

namespace App\Http\Controllers;

use App\Models\Employee; 
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Mostrar una lista de empleados
    public function index()
    {
        $employees = Employee::all(); // Obtener todos los empleados
        return view('employees.index', compact('employees')); // Retornar la vista con la lista
    }

    // Mostrar el formulario para crear un nuevo empleado
    public function create()
    {
        return view('employees.create'); // Retornar la vista del formulario
    }

    // Almacenar un nuevo empleado
    public function store(Request $request)
    {
        // Validar la entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'identification_number' => 'required|string|max:20',
            'salary' => 'required|numeric',
            'hire_date' => 'required|date',
        ]);

        // Crear el nuevo empleado
        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Empleado creado exitosamente.');
    }

    // Mostrar un empleado específico
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    // Mostrar el formulario para editar un empleado
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Actualizar un empleado
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'identification_number' => 'required|string|max:20',
            'salary' => 'required|numeric',
            'hire_date' => 'required|date',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Empleado actualizado exitosamente.');
    }

    // Eliminar un empleado
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Empleado eliminado exitosamente.');
    }
}
