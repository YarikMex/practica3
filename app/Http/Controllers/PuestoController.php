<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    // Definir las validaciones comunes en el constructor
    public $val;
    
    public function __construct() {
        $this->val = [
            'nombrePuesto' => 'required|string|max:255',
            'tipoPuesto' => 'required|string|max:255',
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // Obtener la lista de puestos con paginación
        $puestos = Puesto::paginate(10); 
        return view('puestos.index', compact('puestos'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Inicializar nuevo objeto de Puesto
        $puestos = Puesto::paginate(10); // Mantener la paginación en create
        $puesto = new Puesto;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('puestos.frm', compact('puestos', 'puesto', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate($this->val);

        // Crear un nuevo registro de Puesto
        Puesto::create($validatedData);
    
        return redirect()->route('puestos.index')->with('success', 'Puesto creado correctamente.');
    }
     
    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        // Mostrar detalles del puesto con paginación
        $puestos = Puesto::paginate(10); // Mantener la paginación en show
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';
    
        return view('puestos.frm', compact('puestos', 'puesto', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puesto $puesto)
    {
        // Mostrar el formulario de edición de un puesto con paginación
        $puestos = Puesto::paginate(10); // Mantener la paginación en edit
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';
    
        return view('puestos.frm', compact('puestos', 'puesto', 'accion', 'txtbtn', 'des'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puesto $puesto)
    {
        // Validar los datos actualizados
        $validatedData = $request->validate($this->val);
    
        // Actualizar el registro de Puesto
        $puesto->update($validatedData);
    
        return redirect()->route('puestos.index')->with('success', 'Puesto actualizado correctamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        // Eliminar el registro de Puesto
        $puesto->delete();
    
        return redirect()->route('puestos.index')->with('success', 'Puesto eliminado correctamente.');
    }
}
