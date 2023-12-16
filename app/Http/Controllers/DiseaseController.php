<?php

namespace App\Http\Controllers;

use App\Repositories\DiseaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiseaseController extends Controller
{
    public function __construct(protected DiseaseRepository $diseaseRepository)
    {
    }

    public function diseases()
    {
        $diseases = $this->diseaseRepository->getDiseases();

        return view('diseases', [
            'diseases' => $diseases,
        ]);
    }

    public function get_form()
    {
        return view('partials.forms.disease_create_form');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'doctor' => 'required|min:5|max:255',
            'started_at' => 'required',
            'ended_at' => 'required',
            'description' => 'required',
        ]);

        Auth::user()->diseases()->create([
            'name' => $request->name,
            'doctor' => $request->doctor,
            'started_at' => $request->started_at,
            'ended_at' => $request->ended_at,
            'description' => $request->description,
        ]);

        return redirect()->route('diseases')->with('message', 'Запись успешно добавлена и ожидает подтверждения врача!');
    }
}
