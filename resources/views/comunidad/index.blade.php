@extends('layouts.app')
@section('button')
<a href="{{ route('comunidad.crear')}}" class="block p-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
  Nuevo Comunidad
</a>
@endsection
@section('content')

 <div class="container p-5">

   <h1 class="text-sky-700 font-bold text-xl p-4 bg-sky-300 mb-2">Listado de Comunidades</h1>
  <table class="table ">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE COMUNIDAD</th>
          <th scope="col">SECTOR</th>
          <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody id="todos-list" name="todos-list">
        @foreach ($comunidades as $comunidad)
        <tr id="todo{{$comunidad->id}}">
          <td>{{$comunidad->id}}</td>

            <td>{{$comunidad->comunidad}}</td>
            <td>{{$comunidad->sector}}</td>
            
            
                
           
              <td class="border p-1 flex gap-4 justify-content-center">
                  
                  <a href="#"> <i class="fas fa-edit text-yellow-500"></i></a>
  
                  <a href="#"> <i class="fas fa-trash-alt text-red-500"></i></a>
              </td>
      
           
        </tr>
        @endforeach
    </tbody>
</table>

 </div>
    

@endsection
@section('scripts')

@endsection