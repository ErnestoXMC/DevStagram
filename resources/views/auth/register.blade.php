@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:gap-10 md:justify-center md:items-center p-5 ">
        <div class="md:w-6/12">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registrar">
        </div>

        <div class="md:w-4/12 bg-white shadow p-5 rounded-lg">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" name="name" id="name" class="border p-3 w-full rounded-lg
                        @error('name')
                            border-red-600
                        @enderror"
                        placeholder="Ingresa tu Nombre"
                        value="{{old('name')}}">

                    @error('name')
                        <p class="bg-red-600 uppercase text-sm text-center p-1 text-white mt-2 rounded-lg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input type="text" name="username" id="username" class="border p-3 w-full rounded-lg
                        @error('username')
                            border-red-600
                        @enderror"
                        placeholder="Ingresa tu Username">

                    @error('username')
                        <p class="bg-red-600 uppercase text-sm text-center p-1 text-white mt-2 rounded-lg">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input type="email" name="email" id="email" class="border p-3 w-full rounded-lg
                        @error('email')
                            border-red-600
                        @enderror"
                        placeholder="Ingresa tu Email"
                        value="{{old('email')}}">

                    @error('email')
                        <p class="bg-red-600 text-center text-white uppercase p-1 mt-2 rounded-lg text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" name="password" id="password" class="border p-3 w-full rounded-lg
                        @error('email')
                            border-red-600
                        @enderror"
                        placeholder="Ingresa tu Password">

                    @error('password')
                        <p class="bg-red-600 text-center text-white uppercase p-1 mt-2 rounded-lg text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="border p-3 w-full rounded-lg" placeholder="Repite tu Password">
                </div>

                <input type="submit" value="Crear Cuenta"
                class="bg-sky-600 text-white hover:bg-sky-800 transition-colors cursor-pointer font-bold w-full p-3 rounded-lg uppercase">
            </form>
        </div>
    </div>
@endsection















