<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DevStagram | @yield('titulo')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body class="bg-gray-100"><!--bg-gray-500-->
        <header class="p-5 border-b bg-white shadow"><!--bg-white-->
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-bold">
                    <a href="/">DevStagram</a>
                </h1>

                <nav class="flex gap-2 items-center">
                    @auth<!--Se muestra a los usuarios Autenticados-->
                        <a class="uppercase text-gray-600 text-sm font-bold">Bienvenido
                            <span class="font-normal">{{Auth::user()->name}}</span>
                        </a>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="uppercase text-gray-600 text-sm font-bold">
                                Cerrar Sesión
                            </button>
                        </form>
                    @endauth

                    @guest <!--Se muestra a los usuarios no autenticados-->
                        <a class="uppercase text-gray-600 text-sm font-bold" href="{{route('login')}}">Login</a>
                        <a class="uppercase text-gray-600 text-sm font-bold" href="{{ route('register')}}">Crear Cuenta</a>
                    @endguest

                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>

            @yield('contenido')

        </main>

        <footer class="text-center p-5 text-gray-500 uppercase font-bold bg-gray-300">
            <p>DevStagram - Todos los derechos reservados {{ now()->year }}</p>
        </footer>


    </body>
</html>
