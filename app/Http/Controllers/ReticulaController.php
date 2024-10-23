<?php

namespace App\Http\Controllers;

use App\Models\Reticula;
use App\Models\Carrera;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    // Definir las reglas de validación
    public $val;

    public function __construct() {
        $this->val = [
            'descripcion' => 'required|string|max:200',
            'fechaEnVigor' => 'required|date',
            'idCarrera' => 'required|exists:carreras,id', // Validar que idCarrera exista en la tabla carreras
        ];
    }

    /**
     * Mostrar una lista de todas las retículas.
     */
    public function index()
    {
        $reticulas = Reticula::with('carrera')->paginate(10);  // Incluimos la relación con Carrera
        return view('reticulas.index', compact('reticulas'));
    }

    /**
     * Mostrar el formulario para crear una nueva retícula.
     */
    public function create()
    {
        $carreras = Carrera::all(); // Obtener todas las carreras
        $reticula = new Reticula;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';
    
        return view('reticulas.frm', compact('reticula', 'accion', 'txtbtn', 'des', 'carreras'));
    }

    /**
     * Guardar una nueva retícula.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);

        // Crear la nueva retícula con los datos validados
        Reticula::create($validatedData);

        return redirect()->route('reticulas.index')->with('success', 'Retícula creada correctamente.');
    }

    /**
     * Mostrar los detalles de una retícula específica.
     */
    public function show(Reticula $reticula)
    {
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('reticulas.frm', compact('reticula', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Mostrar el formulario de edición para una retícula específica.
     */
    public function edit(Reticula $reticula)
    {
        $carreras = Carrera::all(); // Obtener todas las carreras
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';
    
        return view('reticulas.frm', compact('reticula', 'accion', 'txtbtn', 'des', 'carreras'));
    }

    /**
     * Actualizar una retícula existente.
     */
    public function update(Request $request, Reticula $reticula)
    {
        $validatedData = $request->validate($this->val);

        // Actualizar la retícula con los datos validados
        $reticula->update($validatedData);

        return redirect()->route('reticulas.index')->with('success', 'Retícula actualizada correctamente.');
    }

    /**
     * Eliminar una retícula existente.
     */
    public function destroy(Reticula $reticula)
    {
        $reticula->delete();

        return redirect()->route('reticulas.index')->with('success', 'Retícula eliminada correctamente.');
    }
}
