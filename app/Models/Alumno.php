<?php

namespace App\Models;

use App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
   //
   use HasFactory;
   protected $filleable = ['name', 'dni', 'email'];
}
