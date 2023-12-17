<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function certificates()
    {
        $certificates = $this->userRepository->getCertificates();

        return view('certificates', [
            'certificates' => $certificates,
        ]);
    }

    public function get_form() {
        return view('partials.forms.certificate_create_form');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'doctor' => 'required|min:5|max:255',
            'started_at' => 'required',
            'description' => 'required',
        ]);

        Auth::user()->certificates()->create([
            'name' => $request->name,
            'address' => $request->address,
            'doctor' => $request->doctor,
            'started_at' => $request->started_at,
            'description' => $request->description,
        ]);

        return redirect()->route('certificates')->with('message', 'Справка успешно добавлена и ожидает подтверждения врача!');
    }
}
