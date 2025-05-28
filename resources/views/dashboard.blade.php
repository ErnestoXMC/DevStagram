@extends('layouts.app')

@section('titulo')
    Tu Cuenta
@endsection

@section('contenido')

    <div class="flex justify-center">
        <div class="w-full md:w-10/12 lg:w-8/12 md:flex">
            <div class="w-full md:w-1/2 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="imagen usuario" style="width: 50%" />
            </div>
            <div class="w-full md:w-1/2 px-5">
                <p class="text-gray-700 text-2xl">{{ Auth::user()->username }}</p>
            </div>
        </div>
    </div>


























@endsection
