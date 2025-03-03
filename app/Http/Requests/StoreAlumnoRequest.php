<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        return true; /* autorizar la petición */


    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> "required|string|max:255",
            "dni"=>[
                "required",
                    "string",
                "size:10",
                "unique:alumnos,dni", 
                "regex:/^[0-9]{8}\-[a-zA-Z]$/",
        ],
            "email" => "required|string|email|max:255|unique:alumnos,email",
        ];

    }
}