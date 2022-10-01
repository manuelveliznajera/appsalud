@extends('layouts.app')
@section('button')
<a href="{{route('usuarios')}}" id="btn-add" class="block p-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
  Regresar
</a>
@endsection
@section('content')

 <div class="container p-5 flex justify-content-center">

   <h1 class="text-sky-700 font-bold text-xl p-4 bg-sky-300 mb-2">Agregar un nuevo Paciente al Sistema</h1>


   <div class="card w-50">
    <div class="card-body">
   
   <form method="POST" action="{{ route('paciente.store') }}">
       @csrf
       @if ($errors->any())
       <div class="alert alert-danger">
           <strong>Lo siento!</strong> Debes de corregir los siguientes errores:<br><br>
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif
       <!-- Name -->
       <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" name="nombres"
                placeholder="Nombre" value="">
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos </label>
            <input type="text" class="form-control"  name="apellidos"
                    placeholder="Apellidos.." value="">
            </div>
            <div class="form-group">
                <label for="dpi">Dpi</label>
                <input type="number" class="form-control"  name="dpi"
                        value="">
            </div>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="title" name="telefono"
                        value="">
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control"  name="fechaNacimiento"
                value="1980-01-01">
            </div>

            <div class="form-group">
                <label for="comunidad">Comunidad</label>
                <select name="comunidad_id" class="form-control" >
                    <option selected>Seleccione una comunidad: </option>
                    @foreach ($comunidades as $comunidad )
                    <option value="{{$comunidad->id}}">{{$comunidad->comunidad}}</option>
                        
                    @endforeach
                   
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
