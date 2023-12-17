<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPersona;
use Illuminate\Support\Facades\DB;

class EventPersonasController extends Controller
{
    public function index()
    {

        $resultados = DB::table('eventpersonas')
            ->join('personas', 'eventpersonas.personas_id', '=', 'personas.id')
            ->join('events', 'eventpersonas.events_id', '=', 'events.id')
            ->select(
                'eventpersonas.id',
                'personas.nombre as nombre_persona',
                'events.nombre as nombre_evento'
            )
            ->get();
        return view('eventspersonas.index')->with(['eventsperson' => $resultados]);
    }
    public function create()
    {
       return view('eventspersonas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'event_id' => 'required|numeric',
            'persona_id' => 'required|numeric',
        ]);

        EventPersona::create([
            'events_id' => $data['event_id'],
            'personas_id' => $data['persona_id'],
        ]);

        return redirect()->route('eventspersonas.index');
    }
    public function delete($events)
    {

        EventPersona::destroy($events);
        return back();
      
    }
}
