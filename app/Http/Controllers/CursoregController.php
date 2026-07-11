<?php

namespace App\Http\Controllers;
use App\Models\Cursoreg;

use Illuminate\Http\Request;

class CursoregController extends Controller
{
    //
    public function registrar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'curso_id' => 'required|exists:cursos,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // Crear un nuevo registro en la tabla cursos_reg
        $cursoreg = Cursoreg::create([
            'curso_id' => $request->input('curso_id'),
            'user_id' => $request->input('user_id'),
        ]);

        // Redirigir a una página de éxito o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'Registro exitoso en el curso.');
    }
}
