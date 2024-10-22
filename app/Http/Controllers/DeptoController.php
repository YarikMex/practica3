<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    // Validaciones comunes para las operaciones CRUD
    public $val;

    public function __construct() {
        // Validaciones para los campos de deptos
        $this->val = [
            'nombredepto' => 'required|string|max:100|unique:deptos,nombredepto',
            'nombremediano' => 'required|string|max:100|unique:deptos,nombremediano',
            'nombrecorto' => 'required|string|max:100|unique:deptos,nombrecorto',
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener la lista de departamentos con paginación
        $deptos = Depto::paginate(10);
        return view('deptos.index', compact('deptos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener la lista de departamentos con paginación para mostrarla en la vista
        $deptos = Depto::paginate(10); 
        $depto = new Depto;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('deptos.frm', compact('deptos', 'depto', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $validatedData = $request->validate($this->val);

        // Crear un nuevo registro de Depto
        Depto::create($validatedData);

        // Obtener la lista de departamentos actualizada con paginación para redirigir
        $deptos = Depto::paginate(10);
        return redirect()->route('deptos.index', compact('deptos'))->with('success', 'Departamento creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Depto $depto)
    {
        // Obtener la lista de departamentos con paginación para mostrarla en la vista
        $deptos = Depto::paginate(10); 
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('deptos.frm', compact('deptos', 'depto', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depto $depto)
    {
        // Obtener la lista de departamentos con paginación para mostrarla en la vista
        $deptos = Depto::paginate(10); 
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('deptos.frm', compact('deptos', 'depto', 'accion', 'txtbtn', 'des'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depto $depto)
    {
        // Validar los datos actualizados con exclusión de la clave única
        $validatedData = $request->validate([
            'nombredepto' => 'required|string|max:100|unique:deptos,nombredepto,' . $depto->idDepto . ',idDepto',
            'nombremediano' => 'required|string|max:100|unique:deptos,nombremediano,' . $depto->idDepto . ',idDepto',
            'nombrecorto' => 'required|string|max:100|unique:deptos,nombrecorto,' . $depto->idDepto . ',idDepto',
        ]);

        // Actualizar el registro de Depto
        $depto->update($validatedData);

        // Obtener la lista de departamentos actualizada con paginación para redirigir
        $deptos = Depto::paginate(10);
        return redirect()->route('deptos.index', compact('deptos'))->with('success', 'Departamento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depto $depto)
    {
        $depto->delete();
        return redirect()->route('deptos.index')->with('success', 'Departamento eliminado correctamente.');
    }
    
}
