<?php

namespace App\Http\Controllers;
use App\Models\Mensaje;

use Illuminate\Http\Request;

#public function "nombre ()"
class MensajeController extends Controller
{
    public function index(){
        $mensajes = Mensaje::all(); //variable mensaje -> modelo mensajes -> todo
        //dd($mensajes);
        return view('lista-mensajes', ['mensajes'=> $mensajes]); //crear un arreglo ['mensajes'=> $mensajes]
    }
    public function create () 
    {    #FUNCION ANONIMA
    return view('contacto');
    }

    public function store(Request $request)
    {
        //dd( $request->all(), $request->correo );
        // dd('si llego a esta ruta');

        // Validar formulario

        // Guardar a DB
        $mensaje = new Mensaje();
        $mensaje->nombre = $request->nombre;
        $mensaje->correo = $request->correo;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->ciudad = 'Guadalajara';
        //guardar en la basse de datos 
        $mensaje->save();

        // Redirigir
        return redirect('/contacto');
    }

    //add ---------------------------------------------

    public function show(Mensaje $mensaje)
    {
        return view('mensajes.show-mensaje', compact('mensaje'));
    }
    public function edit(Mensaje $mensaje)
    {
        return view('mensajes.edit-mensaje', compact('mensaje'));
    }

       /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mensaje $mensaje)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'correo' => ['required', 'email', 'max:255'],
            'mensaje' => ['required', 'min:15']
        ]);

        $mensaje->nombre = $request->nombre;
        $mensaje->correo = $request->correo;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->save();

        return redirect()->route('mensajes.show', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensaje $mensaje)
    {
        //
    }   
}


