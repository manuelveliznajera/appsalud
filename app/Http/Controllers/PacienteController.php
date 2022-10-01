<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class PacienteController extends Controller
{
    
    public function index()
    {
        $pacientes=Paciente::all();
        $comunidades=Comunidad::all();
        $edad=40;

        return view('paciente.index',['pacientes'=>$pacientes,'comunidades'=>$comunidades,'edad'=>$edad]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunidades=Comunidad::all();

        return view('paciente.crear' ,['comunidades'=>$comunidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $request->validate([
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', ],
            'telefono' => ['required'],
            'dpi' => ['required'],
            'fechaNacimiento' => ['required'],
            'comunidad_id'=>['required']       
            
        ],[
            'nombres.required' => 'El Nombre es requerido.',
            'apellidos.required' => 'Apellidos es requerido.',
            'telefono.required' => 'Telefono es requerido.',

        ]);

        $user = Paciente::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'telefono' => $request->telefono,
            'dpi'=>$request->dpi,
            'fechaNacimiento'=>$request->fechaNacimiento,
            'comunidad_id'=>intval($request->comunidad_id),   
        ]);

        return redirect('pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
