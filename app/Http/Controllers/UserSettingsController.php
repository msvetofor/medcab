<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSettingsController extends Controller
{
    public function getSettings()
    {
        $user = auth()->user();

        return view('partials.user_settings', [
            'user' => $user,
        ]);
    }
}
