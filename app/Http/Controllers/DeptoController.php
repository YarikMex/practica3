<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'nombreDepto' => 'required|string|max:255',
        ];
    }

    public function index()
    {
        // Obtener la lista de departamentos con paginación
        $deptos = Depto::paginate(10);
        return view('deptos.index', compact('deptos'));
    }

    public function create()
    {
        // Inicializar nuevo objeto de Depto
        $deptos = Depto::paginate(10);
        $depto = new Depto;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('deptos.frm', compact('deptos', 'depto', 'accion', 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate($this->val);
        
        // Crear un nuevo registro de Departamento
        Depto::create($validatedData);

        return redirect()->route('deptos.index')->with('success', 'Departamento creado correctamente.');
    }

    public function show(Depto $depto)
    {
        // Mostrar detalles del departamento con paginación
        $deptos = Depto::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('deptos.frm', compact('deptos', 'depto', 'accion', 'txtbtn', 'des'));
    }

    public function edit(Depto $depto)
    {
        // Mostrar el formulario de edición de un departamento con paginación
        $deptos = Depto::paginate(10);
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('deptos.frm', compact('deptos', 'depto', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Depto $depto)
    {
        // Validar los datos entrantes
        $validatedData = $request->validate([
            'nombredepto' => 'required|string|max:100|unique:deptos,nombredepto,' . $depto->idDepto . ',idDepto',
            'nombremediano' => 'required|string|max:100|unique:deptos,nombremediano,' . $depto->idDepto . ',idDepto',
            'nombrecorto' => 'required|string|max:100|unique:deptos,nombrecorto,' . $depto->idDepto . ',idDepto',
        ]);
    
        // Actualizar el registro
        $depto->update($validatedData);
    
        return redirect()->route('deptos.index')->with('success', 'Departamento actualizado correctamente.');
    }

    public function destroy(Depto $depto)
    {
        // Eliminar el registro de Departamento
        $depto->delete();

        return redirect()->route('deptos.index')->with('success', 'Departamento eliminado correctamente.');
    }
}
