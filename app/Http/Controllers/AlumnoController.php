<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view("alumno.index",["alumnos"=> $alumnos]);
    }

    public function create()
    {
        return view('alumno.create');
    }

     public function store(Request $request) //recibe los datos
     {
        $alumno = new Alumno();
         $alumno->nombre = $request->nombre;
         $alumno->dni = $request->dni;
         $alumno->email = $request->email;
        
         $alumno->save(); //guarda los datos
        
         return redirect()->route('alumno.index'); //redirijo a la misma ruta
     }

     public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumno.index');
    }

     /*
    public function show(Alumno $alumno)
    {
        return view('alumno.show', compact('alumno'));
    }

    public function edit(Alumno $alumno)
    {
        return view('alumno.edit', compact('alumno'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->edad = $request->edad;
        $alumno->save();
        
        return redirect()->route('alumno.index');
    }

    

    public function generateRandom()
    {
        // Generar 10 alumnos aleatorios
        Alumno::factory()->count(10)->create();
        
        return redirect()->route('alumno.index')->with('success', 'Se han generado 10 alumnos aleatorios');
    }*/
}