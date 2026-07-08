<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\Models\Beneficiarioventa;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class CrearcursoController extends Controller
{
    public function vista()
    {
        return view('crearcurso.crearcursos');
    }



    public function registrar(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:50'],
            'desc' => ['required', 'string', 'max:100'],
            'max_alumnos' => ['required', 'integer'],
            'maestro' => ['required', 'string', 'max:50'],
            'horas' => ['required', 'integer', 'max:100'],
            'imagen' => ['nullable', 'image'],
            'costo' => ['required', 'numeric', 'min:0'],
        ]);

        $rutaDocumento = null;

        if ($request->hasFile('imagen')) {

            $imagen = $request->file('imagen');

            $nombreimagen = time() . '.' . $imagen->getClientOriginalExtension();
            $ruta = storage_path('app/public/images/' . $nombreimagen);

            // Crear imagen con Intervention v2
            $img = Image::make($imagen)->resize(300, 300);

            $img->save($ruta);

            $rutaDocumento = 'images/' . $nombreimagen;
        }

        $crearcurso = Curso::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->desc,
            'cant_alumnos' => $request->max_alumnos,
            'maestro' => $request->maestro,
            'horas' => $request->horas,
            'imagen' => $rutaDocumento,
            'costo' => $request->costo,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'objetivos' => $request->objetivos,
            'requisitos' => $request->requisitos,
            'user_id' => Auth::id(),
        ]);


        return response()->json([
            'message' => 'Curso registrado correctamente'
        ]);
    }

    public function eliminar($id)
    {
        $curso = Curso::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $curso->delete();

        return response()->json([
            'message' => 'Curso eliminado correctamente'
        ]);
    }



    public function traercursos()
    {
        $cursos = Curso::where('user_id', Auth::id())->get();
        return response()->json($cursos);
    }

   public function traertodoscursos()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
    }

    public function detallescurso($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.detalles', compact('curso'));
    }
}
