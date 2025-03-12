<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required|string|max:255",
            "dni" => "required|string|max:255|unique:alumnos.dni|regex:/^[0-9]{8}\-[a-zA-Z]$/",
            "email" => "required|email|max:255|unique:alumnos.email",
        ];
    }

    public function messages(): array
    {
        return [
            'dni.unique' => 'Este DNI ya está registrado en el sistema.',
            'dni.regex' => 'El DNI debe tener el formato: 12345678-X (8 números, guión y una letra)',
            'email.unique' => 'Este email ya está registrado en el sistema.',
            'email.email' => 'Por favor, introduce una dirección de email válida.',
        ];
    }
}