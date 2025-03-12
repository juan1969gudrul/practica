<?php
namespace App\Http\Controllers;
use App\Http\Resources\AlumnoCollection;
use App\Models\Alumno;
use App\Http\Resources\AlumnoResource;
use Illuminate\Http\Request;
class AlumnoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return new AlumnoCollection(Alumno::all());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $datos = $request->input("data.atributes");
        $alumno = new Alumno($datos);
        $alumno->save();
        return new AlumnoResource($alumno);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}