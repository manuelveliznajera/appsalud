<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    
    public function index()
    {
        $medicamentos=Medicamento::all();

        return view('medicamento.index',['medicamentos'=>$medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   

        return view('medicamento.crear' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'marca' => ['required', 'string', ],
            'stock' => ['required'],
            'fechavencimiento' => ['required'],
            'tipomedicamento' => ['required'],
                 
            
        ],[
            'nombre.required' => 'El Nombre es requerido.',
            'marca.required' => 'marca es requerido.',
            'stock.required' => 'stock es requerido.',

        ]);

        $user = Medicamento::create([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'stock' => intval($request->stock),
            'fechavencimiento'=>$request->fechavencimiento,
            'tipomedicamento'=>$request->tipomedicamento,
        ]);

        return redirect()->route('medicamentos');
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
