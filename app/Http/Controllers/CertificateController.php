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

    public function get_update_form($id) {
        $certificate = Auth::user()->certificates()->findOrFail($id);
        return view('partials.forms.certificate_update_form', [
            'certificate' => $certificate,
        ]);
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

    public function update($id, Request $request) {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'doctor' => 'required|min:5|max:255',
            'started_at' => 'required',
            'description' => 'required',
        ]);

        Auth::user()->certificates()->find($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'doctor' => $request->doctor,
            'started_at' => $request->started_at,
            'description' => $request->description,
        ]);

        return redirect()->route('certificates')->with('message', 'Справка успешно сохранена и ожидает подтверждения врача!');
    }

    public function delete($id)
    {
        Auth::user()->certificates()->find($id)->update([
            'archived' => true,
        ]);

        return redirect()->route('certificates')->with('message', 'Справка успешно помечена на удаление и ожидает подтверждения врача!');
    }

    public function undelete($id)
    {
        Auth::user()->certificates()->find($id)->update([
            'archived' => false,
        ]);

        return redirect()->route('certificates')->with('message', 'Пометка на удаление успешно убрана!');
    }
}
