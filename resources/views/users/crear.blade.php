@extends('layouts.app')
@section('button')
<a href="{{route('usuarios')}}" id="btn-add" class="block p-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
  Regresar
</a>
@endsection
@section('content')

 <div class="container p-5 flex justify-content-center">

   <h1 class="text-sky-700 font-bold text-xl p-4 bg-sky-300 mb-2">Agregar un nuevo Usuario al Sistema</h1>


   <div class="card w-50">
    <div class="card-body">
   
   <form method="POST" action="{{ route('usuarios.store') }}">
       @csrf

       <!-- Name -->
       <div class="form-group">
        <label for="name">Nombre del Digitador</label>
        <input type="text" class="form-control" id="title" name="name"
                placeholder="Nombre" value="">
        </div>

        <div class="form-group">
            <label for="email">Ingrese Email </label>
            <input type="email" class="form-control" id="title" name="email"
                    placeholder="email" value="">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="title" name="password"
                        value="">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Password</label>
                <input type="password_confirmation" class="form-control" id="title" name="password_confirmation"
                        value="">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Rol del usuario</label>
                <select name="rol" class="form-control" >
                    <option selected>Seleccione una opcion: </option>
                    <option value="admin">admin</option>
                    <option value="digitador">digitador</option>
                    <option value="paciente">paciente</option>
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
