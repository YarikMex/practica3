<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Depto;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    // Definir las reglas de validación
    public $val;

    public function __construct() {
        $this->val = [
            'nombreCarrera' => 'required|string|max:200',
            'nombreMediano' => 'required|string|max:50',
            'nombreCorto' => 'required|string|max:5',
            'depto_id' => 'required|exists:deptos,idDepto',  // Validar que el depto_id exista en la tabla deptos
        ];
    }

    /**
     * Mostrar una lista de todas las carreras
     */
    public function index()
    {
        $carreras = Carrera::with('depto')->paginate(10);  // Incluimos la relación con Depto
        return view('carreras.index', compact('carreras'));
    }

    /**
     * Mostrar el formulario para crear una nueva carrera
     */
    public function create()
    {
        $carreras = Carrera::paginate(10);
        $carrera = new Carrera;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';
        
        // Obtener todos los departamentos disponibles para el dropdown
        $deptos = Depto::all();

        return view('carreras.frm', compact('carreras', 'carrera', 'accion', 'txtbtn', 'des', 'deptos'));
    }

    /**
     * Guardar una nueva carrera
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);

        // Crear la nueva carrera con los datos validados
        Carrera::create($validatedData);

        return redirect()->route('carreras.index')->with('success', 'Carrera creada correctamente.');
    }

    /**
     * Mostrar los detalles de una carrera específica
     */
    public function show(Carrera $carrera)
    {
        $carreras = Carrera::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('carreras.frm', compact('carreras', 'carrera', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Mostrar el formulario de edición para una carrera específica
     */
    public function edit(Carrera $carrera)
    {
        $carreras = Carrera::paginate(10);
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        // Obtener todos los departamentos disponibles para el dropdown
        $deptos = Depto::all();

        return view('carreras.frm', compact('carreras', 'carrera', 'accion', 'txtbtn', 'des', 'deptos'));
    }

    /**
     * Actualizar una carrera existente
     */
    public function update(Request $request, Carrera $carrera)
    {
        $validatedData = $request->validate($this->val);

        // Actualizar la carrera con los datos validados
        $carrera->update($validatedData);

        return redirect()->route('carreras.index')->with('success', 'Carrera actualizada correctamente.');
    }

    /**
     * Eliminar una carrera existente
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('carreras.index')->with('success', 'Carrera eliminada correctamente.');
    }
}
