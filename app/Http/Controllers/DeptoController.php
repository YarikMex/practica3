<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    // Validaciones comunes para las operaciones CRUD
    public $val;

    public function __construct() {
        $this->val = [
            'nombredepto' => 'required|string|max:100|unique:deptos,nombredepto',
            'nombremediano' => 'required|string|max:100|unique:deptos,nombremediano',
            'nombrecorto' => 'required|string|max:100|unique:deptos,nombrecorto',
        ];
    }

    public function index()
    {
        $deptos = Depto::paginate(10);
        return view('deptos.index', compact('deptos'));
    }

    public function create()
    {
        $depto = new Depto;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('deptos.frm', compact('depto', 'accion', 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Depto::create($validatedData);
        return redirect()->route('deptos.index')->with('success', 'Departamento creado correctamente.');
    }

    public function edit(Depto $depto)
    {
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';
        return view('deptos.frm', compact('depto', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Depto $depto)
    {
        $validatedData = $request->validate($this->val);
        $depto->update($validatedData);
        return redirect()->route('deptos.index')->with('success', 'Departamento actualizado correctamente.');
    }

    public function destroy(Depto $depto)
    {
        $depto->delete();
        return redirect()->route('deptos.index')->with('success', 'Departamento eliminado correctamente.');
    }
}
