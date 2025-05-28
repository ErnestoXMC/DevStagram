<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //*------------CREAR-CUENTA----------
    //? --GET--
    public function index()
    {
        return view('auth.register');
    }

    //? --POST--
    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email:rfc|min:5|max:60',
            'password' => 'required|confirmed|min:6|max:50'
        ], [
            'name.required' => 'El Campo Nombre es Obligatorio',
            'name.max' => 'Superaste el limite de caracteres',

            'username.required' => 'El Campo Username es Obligatorio',
            'username.max' => 'Superaste el limite de caracteres',
            'username.unique' => 'El usuario ya ha sido registrado',

            'email.required' => 'El Campo Email es Obligatorio',
            'email.min' => 'Ingresa un valor valido',
            'email.email' => 'Ingresa un Email valido',
            'email.max' => 'Superaste el limite de caracteres',
            'email.unique' => 'El email ya ha sido registrado',

            'password.required' =>'El Campo password es Obligatorio',
            'password.confirmed' =>'Los passwords no coinciden',
            'password.min' => 'Tu password debe tener al menos 6 caracteres',
            'password.max' => 'Superaste el limite de caracteres'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //Autenticar un usuario
        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('post.index');

    }


}
