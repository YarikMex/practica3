<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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





Route::get('/dashboard', function () {
    return view('inicio2');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
