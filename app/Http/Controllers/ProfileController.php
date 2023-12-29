<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function main() {
        $user = auth()->user();
        return view('partials.profile_menu', [
            'user' => $user,
        ]);
    }

    public function getSettings()
    {
        $user = auth()->user();

        return view('partials.user_settings', [
            'user' => $user,
        ]);
    }

    public function getNotifications()
    {
        $user = auth()->user();

        return view('partials.notifications', [
            'user' => $user,
        ]);
    }

    public function getRecomendations()
    {
        $user = auth()->user();

        return view('partials.recomendations', [
            'user' => $user,
        ]);
    }

    public function updateSettings(Request $request)
    {
        $emailRule = 'required|string|min:3|max:64';

        if ($request->email !== Auth::user()->email) {
            $emailRule .= "|unique:users";
        }

        $request->validate([
            'email' => $emailRule,
            'name' => 'required|max:255',
            'password' => 'required|min:6|max:255|confirmed',
            'gender' => 'required',
            'date_of_birth' => 'required',
        ]);

        $user = Auth::user();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->save();

        return back()->with('message', 'Данные успешно сохранены!');
    }
}
