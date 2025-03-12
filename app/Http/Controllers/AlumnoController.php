<?php 
namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAlumnoRequest;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumno.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumno.create');
    }

    public function store(StoreAlumnoRequest $request)
    {
        $alumno = Alumno::create($request->validated());
        session()->flash("status", "Alumno creado con éxito");
        session()->flash("color", "success");
        return redirect()->route('alumno.index');
    }

    public function edit(Alumno $alumno)
    {
        return view("alumno.edit", compact('alumno'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'dni' => 'required|string|max:255|unique:alumnos,dni,'.$alumno->id,
            'email' => 'required|email|max:255|unique:alumnos,email,'.$alumno->id,
        ]);
        
        $alumno->update($validated);
        
        if ($request->wantsJson()) {
            return response()->json($alumno);
        }
        
        session()->flash("status", "Alumno actualizado con éxito");
        session()->flash("color", "warning");
        return redirect()->route('alumno.index');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        session()->flash("status", "Alumno eliminado con éxito");
        session()->flash("color", "error");
        return redirect()->route('alumno.index');
    }
}
