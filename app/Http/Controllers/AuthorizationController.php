<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthorizationController extends Controller
{
    public function authorization()
    {
        return view('authorization');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|min:3|max:64',
            'password' => 'required|string',
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => 'Неверный логин или пароль',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect()->route('authorization');
    }
}
