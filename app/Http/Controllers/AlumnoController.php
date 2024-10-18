<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Carrera;

class AlumnoController extends Controller
{
    // Definir las validaciones comunes en el constructor
    public $val;
    
    public function __construct() {
        $this->val = [
            'noctrl' => 'required|string|max:255',
            'nombre' => ['required', 'string', 'min:3'],
            'apellidopaterno' => ['required', 'string'],
            'apellidomaterno' => ['required', 'string'],
            'sexo' => 'required|in:M,F',
            'carrera_id' => 'required|integer|exists:carreras,id'
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // Obtener la lista de alumnos con paginación
        $alumnos = Alumno::paginate(10); 
        return view('alumnos2.index', compact('alumnos'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Inicializar nuevo objeto de Alumno
        $alumnos = Alumno::paginate(10); // Mantener la paginación en create
        $alumno = new Alumno;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';
    
        // Obtener todas las carreras
        $carreras = Carrera::all();
    
        return view('alumnos2.frm', compact('alumnos', 'alumno', 'accion', 'txtbtn', 'des', 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate($this->val);
    
        // Crear un nuevo registro de Alumno
        Alumno::create($validatedData);
    
        return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente.');
    }
     
    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        // Mostrar detalles del alumno con paginación
        $alumnos = Alumno::paginate(10); // Mantener la paginación en show
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';
    
        return view('alumnos2.frm', compact('alumnos', 'alumno', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        // Mostrar el formulario de edición de un alumno con paginación
        $alumnos = Alumno::paginate(10); // Mantener la paginación en edit
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';
    
        // Obtener todas las carreras
        $carreras = Carrera::all();
    
        return view('alumnos2.frm', compact('alumnos', 'alumno', 'accion', 'txtbtn', 'des', 'carreras'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        // Validar los datos actualizados
        $validatedData = $request->validate($this->val);
    
        // Actualizar el registro de Alumno
        $alumno->update($validatedData);
    
        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        // Eliminar el registro de Alumno
        $alumno->delete();
    
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente.');
    }
}
