<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index')->with(['personas'=> $personas]);

        
    }
    public function create()
    {
       return view('personas.create');
    }

    public function store()
    {

        $rules = [
            'apellidopaterno' => ['required', 'max:255'],
            'apellidomaterno' => ['required', 'max:255'],
            'nombre' => ['required'],
            'email' => ['required'],
            'telefono' => ['required'],

        ];
        request()->validate($rules);

        Persona::create(request()->all());
        return redirect()->route('personas.index');
    }

    public function delete($personas)
    {

        Persona::destroy($personas);
        return back();
      
    }

    public function edit($personas)
    {
        $personas = Persona::findOrFail($personas);
        

        return view('personas.edit')->with(['personas'=>$personas]);
        
    }

    public function update($personas)
    {

        $personas = Persona::findOrFail($personas);
        
        $personas->update(request()->all());

        return redirect()->route('personas.index');


        
    }
    public function show($personas)
    {

        $personas = Persona::findOrFail($personas);
        return view('personas.show')->with(['personas'=> $personas]);        
    }
}
