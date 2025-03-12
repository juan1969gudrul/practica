<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AlumnoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'alumnos' => $this->collection->map(function($alumno) {
                return [
                    'id' => $alumno->id,
                    'nombre' => $alumno->nombre ?: 'No especificado',
                    'dni' => $alumno->dni,
                    'email' => $alumno->email,
                    'created_at' => $alumno->created_at?->format('Y-m-d H:i:s'),
                    'updated_at' => $alumno->updated_at?->format('Y-m-d H:i:s')
                ];
            })
        ];
    }
}