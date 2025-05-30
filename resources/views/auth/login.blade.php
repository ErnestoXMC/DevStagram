@extends('layouts.app')

@section('titulo')
    Inicia Sesión en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:gap-10 md:justify-center md:items-center p-5 ">
        <div class="md:w-6/12">
            <img src="{{ asset('img/login.jpg') }}" alt="Imagen Login">
        </div>

        <div class="md:w-4/12 bg-white shadow p-5 rounded-lg">
            <form action="{{route('login')}}" route method="POST" novalidate>

                @if(session('mensaje'))
                    <p class="bg-red-600 text-center text-white uppercase p-1 mb-5 mt-2 rounded-lg text-sm">{{ session('mensaje') }}</p>
                @endif

                @csrf
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
                    <input type="checkbox" name="remember">
                    <label for="remember" class="text-gray-500 text-sm font-bold">Mantener mi sesión activa</label>
                </div>


                <input type="submit" value="Iniciar Sesión"
                class="bg-sky-600 text-white hover:bg-sky-800 transition-colors cursor-pointer font-bold w-full p-3 rounded-lg uppercase">
            </form>
        </div>
    </div>


@endsection

