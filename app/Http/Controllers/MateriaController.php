<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Reticula;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'nombreMateria' => 'required|string|max:255',
            'nivel' => 'required|in:L,M',  // Solo permite 'L' o 'M'
            'nombreMediano' => 'required|string|max:100',
            'nombreCorto' => 'required|string|max:50',
            'modalidad' => 'required|in:P,E',  // Solo permite 'P' o 'E'
            'idReticula' => 'required|exists:reticulas,id',  // Validación de clave foránea
        ];
    }

    public function index()
    {
        $materias = Materia::with('reticula')->paginate(10);
        return view('materias.index', compact('materias'));
    }

    public function create()
{
    $materias = Materia::paginate(10);  // Aquí obtienes las materias para la tabla
    $reticulas = Reticula::all();  // Las retículas para el formulario
    $materia = new Materia;
    $accion = 'C';
    $txtbtn = 'Guardar';
    $des = '';

    return view('materias.frm', compact('materias', 'materia', 'reticulas', 'accion', 'txtbtn', 'des'));
}

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Materia::create($validatedData);

        return redirect()->route('materias.index')->with('success', 'Materia creada correctamente.');
    }

    public function show(Materia $materia)
    {
        $materias = Materia::paginate(10);  // Para mostrar la tabla de materias
        $reticulas = Reticula::all();  // Las retículas relacionadas para el formulario
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';  // Deshabilitar los campos para evitar cambios
    
        return view('materias.frm', compact('materias', 'materia', 'reticulas', 'accion', 'txtbtn', 'des'));
    }
    

    public function edit(Materia $materia)
    {
        $materias = Materia::paginate(10);  // Aquí obtienes las materias para la tabla
        $reticulas = Reticula::all();  // Las retículas para el formulario
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';
    
        return view('materias.frm', compact('materias', 'materia', 'reticulas', 'accion', 'txtbtn', 'des'));
    }
    public function update(Request $request, Materia $materia)
    {
        $validatedData = $request->validate($this->val);
        $materia->update($validatedData);

        return redirect()->route('materias.index')->with('success', 'Materia actualizada correctamente.');
    }

    public function destroy(Materia $materia)
    {
        $materia->delete();
        return redirect()->route('materias.index')->with('success', 'Materia eliminada correctamente.');
    }
}
