<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  
     public function dni():string{
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $num= $this->faker->unique()->randomNumber(8);
        $cif= $num."-".$letras[$num % 23];
        return $cif;
     }


     public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'dni'=> $this->dni(),
            'email' => $this->faker->unique()->safeEmail(),
          
            
        ];
    }
}