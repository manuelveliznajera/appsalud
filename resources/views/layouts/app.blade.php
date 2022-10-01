<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/094e6c741f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css'])
    </head>
    <body  >
        <div class="min-h-screen grid grid-cols-6">
            <div class="col-span-1">
                <div class="border-2 border-sky-500 text-center p-8">
                    <img class=" rounded-lg" src="{{asset('img/salud.png')}}" alt="" >
                    <div class="mt-4">

                        @auth
                        <form action="{{ route('logout')}}" method="POST">
                            @csrf
                            <button  class="flex items-center mt-3 hover:bg-sky-500 p-4 text-gray-500 hover:text-white rounded-lg transition-colors"> Cerrar sesion </a>
                        </form>
                            
                        @endauth
                    </div>
     
                    <div class=" h-[500px] flex flex-col justify-between my-2 ">

                        <nav>
                            <ul>
                                <li>
                                    
                                    <a href="{{ route('dashboard')}}" class="flex items-center gap-4 hover:bg-sky-500 p-4 text-gray-500 hover:text-white rounded-lg transition-colors"> <i class="fas fa-tachometer-alt"></i>Dashboard </a>
                                </li>
    
                                <ul>
                                    <li>
                                    
                                        <a href="{{ route('usuarios')}}" class="flex items-center gap-4 hover:bg-sky-500 p-4 hover:text-white rounded-lg transition-colors"> <i class="far fa-user "></i>Usuarios del sistema </a>
                                    </li>
                                    <li>
                                    
                                        <a href="{{ route('pacientes')}}" class="flex items-center gap-4 hover:bg-sky-500 p-4 hover:text-white rounded-lg transition-colors"> <i class="fas fa-user-injured"></i>Pacientes </a>
                                    </li>
                                    <li>
                                    
                                        <a href="{{ route('medicamentos')}}" class="flex items-center gap-4 hover:bg-sky-500 p-4 hover:text-white rounded-lg transition-colors"> <i class="fas fa-user-injured"></i>Medicamentos </a>
                                    </li>
                                    <li>
                                    
                                        <a href="{{ route('comunidades')}}" class="flex items-center gap-4 hover:bg-sky-500 p-4 hover:text-white rounded-lg transition-colors"> <i class="fas fa-user-injured"></i>Comunidades </a>
                                    </li>
                                </ul>
                            </ul>
                        </nav>
    
                        <div class="flex flex-col gap-4">
                            <img src="{{ asset('img/developer.png')}}" alt="">
                            <a href="{{ route('logout')}}" class="flex items-center gap-4 hover:bg-sky-500 p-4 text-gray-500 hover:text-white rounded-lg transition-colors"> <i class="fas fa-tachometer-alt"></i>Logout </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="    col-span-5">
                <header class="bg-sky-50 border-4 border-sky-200 flex item-center justify-between  p-5 ">
                    <div>
                        <h1 class="text-sky-700 font-bold text-lg" >Aplicacion Web para el Control de Vacunas de Pacientes Cronicos - Centro de Salud Tecuaco</h1>
                    </div>
                    <div class="flex gap-4">
                        @yield('button')

                    </div>
                </header>
                @yield('content')
            </div>
        </div>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    
@yield('scripts')
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
