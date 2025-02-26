@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:gap-10 md:justify-center md:items-center p-5">
        <div class="md:w-6/12">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registrar">
        </div>

        <div class="md:w-4/12">
            <form action="">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" name="name" id="name" class="border p-3 w-full rounded-lg" placeholder="Ingresa tu Nombre">
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" name="username" id="username" class="border p-3 w-full rounded-lg" placeholder="Ingresa tu Username">
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" name="email" id="email" class="border p-3 w-full rounded-lg" placeholder="Ingresa tu Email">
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" name="password" id="password" class="border p-3 w-full rounded-lg" placeholder="Ingresa tu Password">
                </div>

                <div class="mb-5">
                    <label for="password-confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
                    <input type="password" name="password-confirmation" id="password-confirmation" class="border p-3 w-full rounded-lg" placeholder="Repite tu Password">
                </div>

                <input type="submit" value="Crear Cuenta"
                class="bg-sky-600 text-white hover:bg-sky-800 transition-colors cursor-pointer font-bold w-full p-3 rounded-lg">
            </form>
        </div>
    </div>
@endsection















