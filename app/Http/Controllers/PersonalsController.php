<?php

namespace App\Http\Controllers;

use App\Models\Personals;
use App\Models\Depto;
use App\Models\Puesto;
use Illuminate\Http\Request;

class PersonalsController extends Controller
{
    public function index()
    {
        $personals = Personals::paginate(10); // Paginación de resultados
        return view('personals.index', compact('personals'));
    }

    public function create()
    {
        $personals = Personals::paginate(10);
        $personal = new Personals;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        // Listas para select de Depto y Puesto
        $deptos = Depto::all();
        $puestos = Puesto::all();

        return view('personals.frm', compact('personals', 'personal', 'accion', 'txtbtn', 'des', 'deptos', 'puestos'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'RFC' => 'required|string|max:100|unique:personals,RFC',
            'nombres' => 'required|string|max:50',
            'apellidop' => 'required|string|max:50',
            'apellidom' => 'required|string|max:50',
            'licenciatura' => 'nullable|string|max:200',
            'licit' => 'boolean',
            'especializacion' => 'nullable|string|max:200',
            'espit' => 'boolean',
            'maestria' => 'nullable|string|max:200',
            'maetit' => 'boolean',
            'doctorado' => 'nullable|string|max:200',
            'doctit' => 'boolean',
            'fechasingsep' => 'nullable|date',
            'fechaisingins' => 'nullable|date',
            'depto_id' => 'required|exists:deptos,idDepto',
            'puesto_id' => 'required|exists:puestos,id',
            // Añade otros campos y validaciones si es necesario
        ]);
    
        Personals::create($validatedData);
    
        return redirect()->route('personals.index')->with('success', 'Registro creado correctamente.');
    }
    
    

    public function show(Personals $personal)
    {
        $personals = Personals::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';
    
        // Cargar las listas de Depto y Puesto para pasarlas a la vista
        $deptos = Depto::all();
        $puestos = Puesto::all();
    
        return view('personals.frm', compact('personals', 'personal', 'accion', 'txtbtn', 'des', 'deptos', 'puestos'));
    }
    

    public function edit(Personals $personal)
{
    $personals = Personals::paginate(10);
    $accion = 'E';
    $txtbtn = 'Actualizar';
    $des = '';

    // Cargar las listas de Depto y Puesto para pasarlas a la vista
    $deptos = Depto::all();
    $puestos = Puesto::all();

    return view('personals.frm', compact('personals', 'personal', 'accion', 'txtbtn', 'des', 'deptos', 'puestos'));
}


public function update(Request $request, Personals $personal)
{
    $validatedData = $request->validate([
        'RFC' => 'required|string|max:100|unique:personals,RFC,' . $personal->id,
        'nombres' => 'required|string|max:50',
        'apellidop' => 'required|string|max:50',
        'apellidom' => 'required|string|max:50',
        'licenciatura' => 'nullable|string|max:200',
        'licit' => 'boolean',
        'especializacion' => 'nullable|string|max:200',
        'espit' => 'boolean',
        'maestria' => 'nullable|string|max:200',
        'maetit' => 'boolean',
        'doctorado' => 'nullable|string|max:200',
        'doctit' => 'boolean',
        'fechasingsep' => 'nullable|date',
        'fechaisingins' => 'nullable|date',
        'depto_id' => 'required|exists:deptos,idDepto',
        'puesto_id' => 'required|exists:puestos,id',
        // Otros campos y validaciones según sea necesario
    ]);

    $personal->update($validatedData);

    return redirect()->route('personals.index')->with('success', 'Registro actualizado correctamente.');
}


    public function destroy(Personals $personal)
    {
        $personal->delete();

        return redirect()->route('personals.index')->with('success', 'Registro eliminado correctamente.');
    }
}
