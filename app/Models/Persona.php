<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'apellidopaterno',
        'apellidomaterno',
        'nombre',
        'email',
        'telefono',
        
    ];
    public function personas(){
        return $this->hasMany(EventPersona::class);
    }
}
