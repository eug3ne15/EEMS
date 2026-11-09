<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:10|confirmed'
        ]);

        $user = User::create([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email',
            'password'=> Hash::make($request->password),
        ]);
    } 
}
