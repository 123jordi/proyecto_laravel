<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class ApiController extends Controller
{
    public function index()
    {
        return Persona::all();
    }
  
    public function store(Request $request)
    {
        
        $persona = new Persona;
        $persona->apellidopaterno = $request->apellidopaterno;
        $persona->apellidomaterno = $request->apellidomaterno;
        $persona->nombre = $request->nombre;
        $persona->email = $request->email;
        $persona->telefono = $request->telefono;
        $persona->save();

        return $persona;



        $rules = [
            'apellidopaterno' => ['required', 'max:255'],
            'apellidomaterno' => ['required', 'max:255'],
            'nombre' => ['required'],
            'email' => ['required'],
            'telefono' => ['required'],

        ];
        request()->validate($rules);

        
    }

    public function destroy(Persona $personas)
    {
    }

    public function edit($personas)
    {
    }

    public function update(Request $request, Persona $personas)
    {
    }
    public function show($personas)
    {

        $personas = Persona::find($personas);


        return $personas;
    }
}
