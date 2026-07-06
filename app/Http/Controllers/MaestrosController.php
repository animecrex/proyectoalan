<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    public function indexmaestros()
    {
        return view('maestros.maestro');
    }
    
}
