<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    // Definir las reglas de validación
    public $val;

    public function __construct() {
        $this->val = [
            'periodo' => 'required|string|max:100',
            'descCorta' => 'required|string|max:10',
            'FechaIni' => 'required|date',
            'FechaFin' => 'required|date|after_or_equal:FechaIni',  // FechaFin debe ser igual o después de FechaIni
        ];
    }

    /**
     * Mostrar una lista de todos los periodos.
     */
    public function index()
    {
        $periodos = Periodo::paginate(10);
        return view('periodos.index', compact('periodos'));
    }

    /**
     * Mostrar el formulario para crear un nuevo periodo.
     */
    public function create()
    {
        $periodos = Periodo::paginate(10);
        $periodo = new Periodo;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';
        return view('periodos.frm', compact('periodos', 'periodo', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Guardar un nuevo periodo.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Periodo::create($validatedData);
        return redirect()->route('periodos.index')->with('success', 'Periodo creado correctamente.');
    }

    /**
     * Mostrar los detalles de un periodo específico.
     */
    public function show(Periodo $periodo)
    {
        $periodos = Periodo::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';
        return view('periodos.frm', compact('periodos', 'periodo', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Mostrar el formulario para editar un periodo.
     */
    public function edit(Periodo $periodo)
    {
        $periodos = Periodo::paginate(10);
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';
        return view('periodos.frm', compact('periodos', 'periodo', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Actualizar un periodo existente.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $validatedData = $request->validate($this->val);
        $periodo->update($validatedData);
        return redirect()->route('periodos.index')->with('success', 'Periodo actualizado correctamente.');
    }

    /**
     * Eliminar un periodo.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index')->with('success', 'Periodo eliminado correctamente.');
    }
}
