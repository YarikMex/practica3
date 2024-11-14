<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'hora_ini' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_ini',
        ];
    }

    public function index()
    {
        $horas = Hora::paginate(10);
        return view('horas.index', compact('horas'));
    }

    public function create()
    {
        $horas = Hora::paginate(10);
        $hora = new Hora;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';

        return view('horas.frm', compact('horas', 'hora', 'accion', 'txtbtn', 'des'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        Hora::create($validatedData);

        return redirect()->route('horas.index')->with('success', 'Hora creada correctamente.');
    }

    public function show(Hora $hora)
    {
        $horas = Hora::paginate(10);
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';

        return view('horas.frm', compact('horas', 'hora', 'accion', 'txtbtn', 'des'));
    }

    public function edit(Hora $hora)
    {
        $horas = Hora::paginate(10);
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';

        return view('horas.frm', compact('horas', 'hora', 'accion', 'txtbtn', 'des'));
    }

    public function update(Request $request, Hora $hora)
    {
        $validatedData = $request->validate($this->val);
        $hora->update($validatedData);

        return redirect()->route('horas.index')->with('success', 'Hora actualizada correctamente.');
    }

    public function destroy(Hora $hora)
    {
        $hora->delete();
        return redirect()->route('horas.index')->with('success', 'Hora eliminada correctamente.');
    }
}
