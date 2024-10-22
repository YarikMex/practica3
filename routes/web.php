<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ProfileController;


// Rutas de Inicio
Route::get('/', function () {
    return view('inicio');
})->name("inicio");

Route::get('/ayuda',function (){
    return view('ayuda');
})->name('ayuda');

Route::get('/contacto',function (){
    return view('contacto');
})->name('contacto');

Route::get('/acerca',function (){
    return view('acerca');
})->name('acerca');

// ruta inicio 2
Route::get('/inicio2', function () {
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');

    //ruta Catalogo
    Route::get('/catalogo',function (){
        return view('catalogo');
    })->middleware(['auth', 'verified'])->name('catalogo');

    Route::get('/horarios',function (){
        return view('horarios');
    })->middleware(['auth', 'verified'])->name('horarios');
    
    //ruta proyecto indices
    Route::get('/proyectosIndividuales',function (){
        return view('proyectosIndividuales');
    })->middleware(['auth', 'verified'])->name('proyectosIndividuales');
        //ruta Periodo
        Route::get('/periodo',function (){
            return view('periodo');
        })->middleware(['auth', 'verified'])->name('periodo');
        //ruta carreras
        Route::get('/carreras',function (){
            return view('carreras');
        })->middleware(['auth', 'verified'])->name('carreras');
        //ruta plaza
        Route::get('/plaza',function (){
            return view('plaza');
        })->middleware(['auth', 'verified'])->name('plaza');
        //ruta puesto
        Route::get('/puesto',function (){
            return view('puesto');
        })->middleware(['auth', 'verified'])->name('puesto');
        //ruta personal
        Route::get('/personal',function (){
            return view('personal');
        })->middleware(['auth', 'verified'])->name('personal');
        //ruta departamento
        Route::get('/departamento',function (){
            return view('departamento');
        })->middleware(['auth', 'verified'])->name('departamento');
        //ruta reticula
        Route::get('/reticula',function (){
            return view('reticula');
        })->middleware(['auth', 'verified'])->name('reticula');
        //ruta materia
        Route::get('/materia',function (){
            return view('materia');
        })->middleware(['auth', 'verified'])->name('materia');
        //ruta alumno
        Route::get('/alumno',function (){
            return view('alumno');
        })->middleware(['auth', 'verified'])->name('alumno');
    //    
    //rutas de horarios
        Route::get('/docentes',function (){
            return view('docentes');
        })->middleware(['auth', 'verified'])->name('docentes');


    //
    //PROYECTOS INDIVIDUALES
        Route::get('/capacitacion',function (){
            return view('capacitacion');
        })->middleware(['auth', 'verified'])->name('capacitacion');

        Route::get('/asesoria',function (){
            return view('asesoria');
        })->middleware(['auth', 'verified'])->name('asesoria');

        Route::get('/proyectos',function (){
            return view('proyectos');
        })->middleware(['auth', 'verified'])->name('proyectos');

        Route::get('/materialD',function (){
            return view('materialD');
        })->middleware(['auth', 'verified'])->name('materialD');
        
        Route::get('/docencia',function (){
            return view('docencia');
        })->middleware(['auth', 'verified'])->name('docencia');

        Route::get('/asesoriaProy',function (){
            return view('asesoriaProy');
        })->middleware(['auth', 'verified'])->name('asesoriaProy');

        Route::get('/asesoriaSS',function (){
            return view('asesoriaSS');
        })->middleware(['auth', 'verified'])->name('asesoriaSS');

    //TUTORIAS
       

        Route::get('/capacitacion',function (){
            return view('capacitacion');
        })->middleware(['auth', 'verified'])->name('capacitacion');
    //
    // INSTRUMENTACION Y TUTORIAS
    Route::get('/instrumentacion',function (){
        return view('instrumentacion');
    })->middleware(['auth', 'verified'])->name('instrumentacion');

    Route::get('/tutorias',function (){
        return view('tutorias');
    })->middleware(['auth', 'verified'])->name('tutorias');


//Rutas de Alumnos Crud
Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::post('/alumnos.destroy.{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
route::get('/alumnos.edit.{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show'); 

//Rutas de Puestos en Crud
Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
Route::post('/puestos', [PuestoController::class, 'store'])->name('puestos.store');
Route::post('/puestos.destroy.{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
Route::get('/puestos.edit.{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');
Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');

//Rtuas de Plaza en Crud
Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');
Route::get('/plazas/create', [PlazaController::class, 'create'])->name('plazas.create');
Route::post('/plazas', [PlazaController::class, 'store'])->name('plazas.store');
Route::get('/plazas/{plaza}/edit', [PlazaController::class, 'edit'])->name('plazas.edit');
Route::post('/plazas/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');
Route::post('/plazas/{plaza}/destroy', [PlazaController::class, 'destroy'])->name('plazas.destroy');
Route::get('/plazas/{plaza}', [PlazaController::class, 'show'])->name('plazas.show');

//Rtuas de depto en Crud

Route::get('/deptos.index', [DeptoController::class, 'index'])->name('deptos.index');
Route::get('/deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
Route::post('/deptos', [DeptoController::class, 'store'])->name('deptos.store');
Route::get('/deptos/{depto}/edit', [DeptoController::class, 'edit'])->name('deptos.edit');
Route::post('/deptos/{depto}', [DeptoController::class, 'update'])->name('deptos.update');
Route::post('/deptos/{depto}/destroy', [DeptoController::class, 'destroy'])->name('deptos.destroy');
Route::get('/deptos/{depto}', [DeptoController::class, 'show'])->name('deptos.show');

//Carrera
// Rutas para CRUD de Carreras
Route::get('/carreras.index', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/carreras/create', [CarreraController::class, 'create'])->name('carreras.create');
Route::post('/carreras', [CarreraController::class, 'store'])->name('carreras.store');
Route::get('/carreras/{carrera}/edit', [CarreraController::class, 'edit'])->name('carreras.edit');
Route::post('/carreras/{carrera}', [CarreraController::class, 'update'])->name('carreras.update');
Route::post('/carreras/{carrera}/destroy', [CarreraController::class, 'destroy'])->name('carreras.destroy');
Route::get('/carreras/{carrera}', [CarreraController::class, 'show'])->name('carreras.show');

Route::get('/dashboard', function () {
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
