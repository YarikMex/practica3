<?php

namespace App\Http\Controllers;

use App\Models\Reticula;
use App\Models\Carrera;
use Illuminate\Http\Request;

class ReticulaController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'descripcion' => 'required|string|max:200',
            'fechaEnVigor' => 'required|date',
            'idCarrera' => 'required|exists:carreras,id',
        ];
    }

    public function index()
    {
        $reticulas = Reticula::with('carrera')->paginate(10);
        return view('reticulas.index', compact('reticulas'));
    }

    public function create()
    {
        $reticulas = Reticula::paginate(10);
        $reticula = new Reticula;
        $carreras = Carrera::all();
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('reticulas.frm', compact('reticulas', 'reticula', 'accion', 'txtbtn', 'des', 'carreras'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Reticula::create($validatedData);

        return redirect()->route('reticulas.index')->with('success', 'Retícula creada correctamente.');
    }

    public function show(Reticula $reticula)
    {
        $reticulas = Reticula::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('reticulas.frm', compact('reticulas', 'reticula', 'accion', 'txtbtn', 'des'));
    }

    public function edit(Reticula $reticula)
    {
        $reticulas = Reticula::paginate(10);
        $carreras = Carrera::all();
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('reticulas.frm', compact('reticulas', 'reticula', 'accion', 'txtbtn', 'des', 'carreras'));
    }

    public function update(Request $request, Reticula $reticula)
    {
        $validatedData = $request->validate($this->val);
        $reticula->update($validatedData);

        return redirect()->route('reticulas.index')->with('success', 'Retícula actualizada correctamente.');
    }

    public function destroy(Reticula $reticula)
    {
        $reticula->delete();

        return redirect()->route('reticulas.index')->with('success', 'Retícula eliminada correctamente.');
    }
}
