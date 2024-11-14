<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Models\Edificio;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'nombrelugar' => 'required|string|max:25',
            'nombrecorto' => 'required|string|max:5',
            'edificio_id' => 'required|exists:edificios,id',
        ];
    }

    public function index()
    {
        $lugares = Lugar::paginate(10);
        return view('lugares.index', compact('lugares'));
    }

    public function create()
    {
        $lugares = Lugar::paginate(10);
        $edificios = Edificio::all();
        $lugar = new Lugar;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('lugares.frm', compact('lugares', 'lugar', 'edificios', 'accion', 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Lugar::create($validatedData);

        return redirect()->route('lugares.index')->with('success', 'Lugar creado correctamente.');
    }

    public function show(Lugar $lugar)
    {
        $lugares = Lugar::paginate(10);
        $edificios = Edificio::all();
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('lugares.frm', compact('lugares', 'lugar', 'edificios', 'accion', 'txtbtn', 'des'));
    }

    public function edit(Lugar $lugar)
    {
        $lugares = Lugar::paginate(10);
        $edificios = Edificio::all();
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('lugares.frm', compact('lugares', 'lugar', 'edificios', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Lugar $lugar)
    {
        $validatedData = $request->validate($this->val);
        $lugar->update($validatedData);

        return redirect()->route('lugares.index')->with('success', 'Lugar actualizado correctamente.');
    }

    public function destroy(Lugar $lugar)
    {
        $lugar->delete();
        return redirect()->route('lugares.index')->with('success', 'Lugar eliminado correctamente.');
    }
}
