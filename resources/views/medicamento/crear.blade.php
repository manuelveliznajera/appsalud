@extends('layouts.app')
@section('button')
<a href="{{route('medicamentos')}}" id="btn-add" class="block p-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
  Regresar
</a>
@endsection
@section('content')

 <div class="container p-5 flex justify-content-center">

   <h1 class="text-sky-700 font-bold text-xl p-4 bg-sky-300 mb-2">Agregar medicamentos al Sistema</h1>


   <div class="card w-50">
    <div class="card-body">
   
   <form method="POST" action="{{ route('medicamento.store') }}">
       @csrf

       <!-- Name -->
       <div class="form-group">
        <label for="nombre">Nombre del medicamento</label>
        <input type="text" class="form-control"  name="nombre"
                placeholder="Nombre del medicamento..." value="">
      </div>

      

      <div class="form-group">
        <label for="marca">Marca del medicamento</label>
        <input type="text" class="form-control"  name="marca"
                placeholder="Marca del medicamento..." value="">
      </div>

      <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control"  name="stock"
                value="0">
      </div>

      <div class="form-group">
        <label for="fechavencimiento">Fecha de Vencimiento</label>
        <input type="date" class="form-control"  name="fechavencimiento"
                >
      </div>
            <div class="form-group">
                <label for="tipomedicamento">Tipo de Medicamento </label>
                <select name="tipomedicamento" class="form-control" >
                    <option selected>Seleccione una tipo: </option>
                    <option value="Pastillas">Pastillas</option>
                    <option value="Inyeccion">Inyeccion</option>
                    <option value="Blister">Blister</option>
                    <option value="Topico">Topico</option>                  
                  </select>
        </div>



      
       

       <div class="flex items-center justify-end mt-4">
          

           <x-primary-button class="ml-4">
               {{ __('Registrar') }}
           </x-primary-button>
       </div>
   </form>
   
    </div>
  </div>
 </div>
    

@endsection
