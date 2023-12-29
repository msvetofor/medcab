<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AppointmentRepository;
use App\Models\Appointment;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function __construct(protected UserRepository $userRepository, protected AppointmentRepository $appointmentRepository)
    {
    }
    public function appointment()
    {
        $specializations = $this->appointmentRepository->getSpecialization();
        return view('appointment', [
            'specializations' => $specializations,
        ]);
    }

    public function create(Request $request) {
        $appointment = new Appointment();

//        $appointment->user_id = $request->input('name');

//        $appointment->user_id = 'oleh';
//        $appointment->connection = 'oleh';
//        $appointment->save();
        Auth::user()->appointments()->create([
            'connection' => $request->input('method-radio-button'),
            'specialization' => $request->input('specialist'),
            'trouble' => $request->input('problem_description'),
            'status' => 'busy',
        ]);

        return redirect()->route('appointment')->with('message', 'Заявка успешно отправлена!');
    }

}
