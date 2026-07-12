<?php

namespace App\Http\Controllers;
use App\Models\Cursoreg;
use App\Models\Curso;

use Illuminate\Http\Request;


class CursoregController extends Controller
{
    //
    public function registrarsubs(Request $request)
    {
        
        $request->validate([
            'curso_id' => 'required|exists:cursos,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $curso = Curso::select('id')->find($request->curso_id);

        
        $cursoreg = Cursoreg::create([
            'curso_id' => $request->curso_id,
            'user_id' => Auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Registro exitoso en el curso.');
    }
}
