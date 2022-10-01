@extends('layouts.app')
@section('button')
<a href="{{ route('medicamento.crear')}}" class="block p-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
  Nuevo Medicamento
</a>
@endsection
@section('content')

 <div class="container p-5">

   <h1 class="text-sky-700 font-bold text-xl p-4 bg-sky-300 mb-2">Listado de Medicamentos</h1>
  <table class="table ">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE DE MEDICAMENTOS</th>
          <th scope="col">MARCA</th>
          <th scope="col">STOCK</th>
          <th scope="col">FECHA DE VENCIMIENTO</th>
          <th scope="col">TIPO DE MEDICAMENTO</th>
          <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody id="todos-list" name="todos-list">
        @foreach ($medicamentos as $medicamento)
        <tr id="todo{{$medicamento->id}}">
          <td>{{$medicamento->id}}</td>

            <td>{{$medicamento->nombre}}</td>
            <td>{{$medicamento->marca}}</td>
            <td>{{$medicamento->stock}}</td>
            <td>{{$medicamento->fechavencimiento}}</td>
            <td>{{$medicamento->tipomedicamento}}</td>

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