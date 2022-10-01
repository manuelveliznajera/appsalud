<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table ='paciente';
    protected $fillable = [
        'nombres',
        'apellidos',
        'telefono',
        'dpi',
        'fechaNacimiento',
        'comunidad_id'

    ];

    public function comunidad(){
        return $this->belongsTo(Comunidad::class);
    }
}
