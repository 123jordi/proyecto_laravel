<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index')->with(['events'=> $events]);

        
    }
    public function create()
    {
       return view('events.create');
    }

    public function store()
    {

        $rules = [
            'nombre' => ['required', 'max:255'],
            'descripcion' => ['required', 'max:255'],
            'fecha_inicio' => ['required'],
            'fecha_final' => ['required'],
        ];
        request()->validate($rules);

        Event::create(request()->all());
        return redirect()->route('events.index');
    }

    public function delete($events)
    {

        Event::destroy($events);
        return back();
      
    }

    public function edit($events)
    {
        $events = Event::findOrFail($events);
        

        return view('events.edit')->with(['events'=>$events]);
        
    }

    public function update($events)
    {

        $events = Event::findOrFail($events);
        
        $events->update(request()->all());

        return redirect()->route('events.index');


        
    }
    public function show($events)
    {

        $events = Event::findOrFail($events);
        return view('events.show')->with(['events'=> $events]);        
    }

    public function regresar()
    {

        
        return view('evento');
    }

}
