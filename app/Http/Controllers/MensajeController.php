<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#public function "nombre ()"
class MensajeController extends Controller
{
    public function create () 
    {    #FUNCION ANONIMA
    return view('contacto');
    }

    public function store(Request $request)
    {
        dd( $request->all(), $request->correo );
        // dd('si llego a esta ruta');

        // Validar formulario

        // Guardar a DB

        // Redirigir
    }
}


