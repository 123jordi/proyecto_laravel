<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPersona extends Model
{
    use HasFactory;
    protected $table = 'eventpersonas'; // Nombre correcto de la tabla pivot

    protected $fillable = [
        'id',
        'events_id',
        'personas_id',   
    ];
    public function eventos(){
        return $this->belongsTo(Event::class, 'events_id');
    }
    public function personas(){
        return $this->belongsTo(Persona::class, 'personas_id');
    }
}
