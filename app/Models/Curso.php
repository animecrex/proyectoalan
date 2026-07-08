<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'cant_alumnos',
        'maestro',
        'horas',
        'imagen',
        'costo',
        'fecha_inicio',
        'fecha_fin',
        'objetivos',
        'requisitos',
        'user_id',
    ];

    public $timestamps = false;
}
