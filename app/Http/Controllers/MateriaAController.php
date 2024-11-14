<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Periodo;
use App\Models\MateriaA;
use App\Models\Reticula;
use Illuminate\Http\Request;

class MateriaAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los períodos y las carreras
        $periodos = Periodo::all();
        $carreras = Carrera::all();
    
        // Pasarlos a la vista
        return view('materiasa.index', compact('periodos', 'carreras'));
    }
    
    public function obtenerMateriasPorCarrera(Request $request)
{
    $reticulas = Reticula::where('idCarrera', $request->idcarrera)->with('materias')->get();
    return response()->json($reticulas->pluck('materias')->flatten());
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener todos los periodos disponibles para el select
        $periodos = Periodo::all();

        // Pasar los periodos a la vista para el select
        return view('materiaA.selectPeriodo', compact('periodos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriaA $materiaA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriaA $materiaA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MateriaA $materiaA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MateriaA $materiaA)
    {
        //
    }
}
