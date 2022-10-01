@extends('layouts.login')

@section('content')


    <div class="card mt-5 flex flex-col items-center w-1/3 border-sky-600 shadow-lg" >
        <img src="{{asset('img/logo2.png')}}" width="280px" alt="...">
        <div class="card-body">
          <h5 class="card-title">INICIAR SESION</h5>
          <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email </label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
           
     
            <button type="submit"  class="block p-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
               Ingresar
            </button>
          </form>
    
        </div>
      </div>

  @endsection