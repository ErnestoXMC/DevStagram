<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(User $user)
    {
        return view("dashboard", [
            'user' => $user
        ]);
    }

}
