<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InjectionController extends Controller
{

    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function injections()
    {
        $injections = $this->userRepository->getInjections();

        return view('injections', [
            'injections' => $injections,
        ]);
    }

    public function get_form()
    {
        return view('partials.forms.injection_create_form');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'doctor' => 'required|min:5|max:255',
            'started_at' => 'required',
            'description' => 'required',
        ]);

        Auth::user()->injections()->create([
            'name' => $request->name,
            'address' => $request->address,
            'doctor' => $request->doctor,
            'started_at' => $request->started_at,
            'description' => $request->description,
        ]);

        return redirect()->route('injections')->with('message', 'Прививка успешно добавлена и ожидает подтверждения врача!');
    }
}
