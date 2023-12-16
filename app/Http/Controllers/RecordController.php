<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{

    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function records()
    {
        $records = $this->userRepository->getRecords();

        return view('records', [
            'records' => $records,
        ]);
    }

    public function get_form()
    {
        return view('partials.forms.record_create_form');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'doctor' => 'required|min:5|max:255',
            'started_at' => 'required',
            'description' => 'required',
            'treatment' => 'required|min:5|max:255',
        ]);

        Auth::user()->records()->create([
            'name' => $request->name,
            'address' => $request->address,
            'doctor' => $request->doctor,
            'started_at' => $request->started_at,
            'description' => $request->description,
            'treatment' => $request->treatment,
        ]);

        return redirect()->route('records')->with('message', 'Запись успешно добавлена и ожидает подтверждения врача!');
    }
}
