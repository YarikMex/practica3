<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'nombreedificio' => 'required|string|max:30',
            'nombrecorto' => 'required|string|max:5',
        ];
    }

    public function index()
    {
        $edificios = Edificio::paginate(10);
        return view('edificios.index', compact('edificios'));
    }

    public function create()
    {
        $edificios = Edificio::paginate(10);
        $edificio = new Edificio;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('edificios.frm', compact('edificios', 'edificio', 'accion', 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Edificio::create($validatedData);

        return redirect()->route('edificios.index')->with('success', 'Edificio creado correctamente.');
    }

    public function show(Edificio $edificio)
    {
        $edificios = Edificio::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('edificios.frm', compact('edificios', 'edificio', 'accion', 'txtbtn', 'des'));
    }

    public function edit(Edificio $edificio)
    {
        $edificios = Edificio::paginate(10);
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('edificios.frm', compact('edificios', 'edificio', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Edificio $edificio)
    {
        $validatedData = $request->validate($this->val);
        $edificio->update($validatedData);

        return redirect()->route('edificios.index')->with('success', 'Edificio actualizado correctamente.');
    }

    public function destroy(Edificio $edificio)
    {
        $edificio->delete();
        return redirect()->route('edificios.index')->with('success', 'Edificio eliminado correctamente.');
    }
}
