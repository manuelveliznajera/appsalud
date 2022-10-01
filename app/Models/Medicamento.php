<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $table ='medicamento';
    protected $fillable = [
        'nombre',
        'marca',
        'stock',
        'dpi',
        'fechavencimiento',
        'tipomedicamento'
    ];

    public function paciente(){
        $this->hasMany(Paciente::class);
    }
}
