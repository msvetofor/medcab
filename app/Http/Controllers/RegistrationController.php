<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|min:3|max:64|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:6|max:255|confirmed',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ]);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
