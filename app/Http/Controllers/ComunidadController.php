<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use Illuminate\Http\Request;

class ComunidadController extends Controller
{
    public function index()
    {
        
        $comunidades=Comunidad::all();

        return view('comunidad.index',['comunidades'=>$comunidades]);
    }

    public function create()
    {
        return view('comunidad.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comunidad' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string',  'max:255', ],
           
            
            
        ]);

        $Comunidad = Comunidad::create([
            'comunidad' => $request->comunidad,
            'sector' => $request->sector,
            
            
        ]);

        return redirect()->route('comunidades');
    }
}
