<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'nombrePlaza' => 'required|string|max:255',
        ];
    }

    public function index()
    {
        $plazas = Plaza::paginate(10);
        return view('plazas.index', compact('plazas'));
    }

    public function create()
    {
        $plazas = Plaza::paginate(10);
        $plaza = new Plaza;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('plazas.frm', compact('plazas', 'plaza', 'accion', 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Plaza::create($validatedData);

        return redirect()->route('plazas.index')->with('success', 'Plaza creada correctamente.');
    }

    public function show(Plaza $plaza)
    {
        $plazas = Plaza::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('plazas.frm', compact('plazas', 'plaza', 'accion', 'txtbtn', 'des'));
    }

    public function edit(Plaza $plaza)
    {
        $plazas = Plaza::paginate(10);
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('plazas.frm', compact('plazas', 'plaza', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Plaza $plaza)
    {
        $validatedData = $request->validate($this->val);
        $plaza->update($validatedData);

        return redirect()->route('plazas.index')->with('success', 'Plaza actualizada correctamente.');
    }

    public function destroy(Plaza $plaza)
    {
        $plaza->delete();
        return redirect()->route('plazas.index')->with('success', 'Plaza eliminada correctamente.');
    }
}