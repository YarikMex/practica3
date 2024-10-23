<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'periodo' => 'required|string|max:100',
            'descCorta' => 'required|string|max:10',
            'FechaIni' => 'required|date',
            'FechaFin' => 'required|date',
        ];
    }

    public function index()
    {
        $periodos = Periodo::paginate(10);
        return view('periodos.index', compact('periodos'));
    }

    public function create()
    {
        $periodos = Periodo::paginate(10);
        $periodo = new Periodo;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('periodos.frm', compact('periodos', 'periodo', 'accion', 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Periodo::create($validatedData);

        return redirect()->route('periodos.index')->with('success', 'Periodo creado correctamente.');
    }

    public function show(Periodo $periodo)
    {
        $periodos = Periodo::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('periodos.frm', compact('periodos', 'periodo', 'accion', 'txtbtn', 'des'));
    }

    public function edit(Periodo $periodo)
    {
        $periodos = Periodo::paginate(10);
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('periodos.frm', compact('periodos', 'periodo', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Periodo $periodo)
    {
        $validatedData = $request->validate($this->val);
        $periodo->update($validatedData);

        return redirect()->route('periodos.index')->with('success', 'Periodo actualizado correctamente.');
    }

    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('periodos.index')->with('success', 'Periodo eliminado correctamente.');
    }
}
