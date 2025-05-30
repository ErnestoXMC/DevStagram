<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email:rfc',
            'password' => 'required'
        ], [
            'email.required' => 'El Campo Email es Obligatorio',
            'email.email' => 'Ingresa un Email valido',

            'password.required' => 'El Campo password es Obligatorio',
        ]);

        if(!Auth::attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        return redirect()->route('post.index');
    }
}
