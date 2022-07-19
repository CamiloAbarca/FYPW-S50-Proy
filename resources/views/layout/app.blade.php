<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('Title') - Evaluación 1</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <!-- Booystrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-2xl font-weight-bold"> Evaluación 1 </p>
            </div>
            <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
                @if(auth()->check())
                <li class="mx-6">
                   <p class="text-xl">Bienvenido al panel de administrador</p> <b>Usuario: </b> {{auth()->user()->name}}
                </li>
                <li>
                    <a href="{{route('login.destroy')}}" class="font-bold py-3 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:text-indigo-700">Salir</a>
                </li>
                @else
                    <li class="mx-6">
                        <a href="{{route('login.index')}}" class="font-semi-bold hover:bg-indigo-700 py-3 px-4 rounded-md">Login</a>
                    </li>
                    <li>
                        <a href="{{route('register.index')}}" class="font-semi-bold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Registro</a>
                    </li>
                @endif
            </ul>
    </nav>


    @yield('content')
    @yield('selects')
    @yield('list')

</body>
</html>
