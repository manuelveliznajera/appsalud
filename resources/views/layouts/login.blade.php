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
    <body  class="p-5 bg-cyan-400">
        <div class="flex flex-col items-center ">
           
            
                <header class="bg-sky-50 border-4 border-sky-200 flex item-center text-center  p-5 ">
                    <div>
                        <h1 class="text-sky-700 font-bold text-lg" >Aplicacion Web para el Control de Vacunas de Pacientes Cronicos - Centro de Salud Tecuaco</h1>
                    </div>
                   
                </header>
               
           
           
                @yield('content')
            </div>
       
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    
@yield('scripts')
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
