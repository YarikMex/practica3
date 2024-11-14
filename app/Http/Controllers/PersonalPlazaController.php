<?php

namespace App\Http\Controllers;

use App\Models\PersonalPlaza;
use App\Models\Plaza;
use App\Models\Personals;
use Illuminate\Http\Request;

class PersonalPlazaController extends Controller
{
    public $val;

    public function __construct() {
        $this->val = [
            'tiponombramiento' => 'required|integer',
            'plaza_id' => 'required|exists:plazas,idPlaza',
            'personal_id' => 'required|exists:personals,id',
        ];
    }

    public function index()
    {
        $personalPlazas = PersonalPlaza::paginate(10);
        return view('personal_plazas.index', compact('personalPlazas'));
    }

    public function create()
    {
        $plazas = Plaza::all();
        $personals = Personals::all();
        $personalPlazas = PersonalPlaza::paginate(10); // Agregar esta línea
        $personalPlaza = new PersonalPlaza;
        $accion = 'C';
        $txtbtn = 'Guardar';
        $des = '';
    
        return view('personal_plazas.frm', compact('personalPlaza', 'plazas', 'personals', 'personalPlazas', 'accion', 'txtbtn', 'des'));
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->val);
        PersonalPlaza::create($validatedData);

        return redirect()->route('personal_plazas.index')->with('success', 'Registro creado correctamente.');
    }
    public function show(PersonalPlaza $personalPlaza)
    {
        $plazas = Plaza::all();
        $personals = Personals::all();
        $personalPlazas = PersonalPlaza::paginate(10); // Agregar esta línea
        $accion = 'D';
        $txtbtn = 'Confirme Eliminación';
        $des = 'disabled';
    
        return view('personal_plazas.frm', compact('personalPlaza', 'plazas', 'personals', 'personalPlazas', 'accion', 'txtbtn', 'des'));
    }
    

    public function edit(PersonalPlaza $personalPlaza)
    {
        $plazas = Plaza::all();
        $personals = Personals::all();
        $personalPlazas = PersonalPlaza::paginate(10); // Agregar esta línea
        $accion = 'E';
        $txtbtn = 'Actualizar';
        $des = '';
    
        return view('personal_plazas.frm', compact('personalPlaza', 'plazas', 'personals', 'personalPlazas', 'accion', 'txtbtn', 'des'));
    }
    
    public function update(Request $request, PersonalPlaza $personalPlaza)
    {
        $validatedData = $request->validate($this->val);
        $personalPlaza->update($validatedData);

        return redirect()->route('personal_plazas.index')->with('success', 'Registro actualizado correctamente.');
    }

    public function destroy(PersonalPlaza $personalPlaza)
    {
        $personalPlaza->delete();
        return redirect()->route('personal_plazas.index')->with('success', 'Registro eliminado correctamente.');
    }
}
