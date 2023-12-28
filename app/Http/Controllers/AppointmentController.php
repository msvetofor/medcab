<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function __construct(protected UserRepository $userRepository)
    {
    }
    public function appointment()
    {
        return view('appointment');
    }

    public function create(Request $request) {
//        $data=$request->validate([
//            'user_id' => 'required|min:1|max:255',
//            'specialization' => 'required|min:1|max:255',
//        ]);
        $appointment = new Appointment();
//        $appointment->user_id = $request->input('name');

//        $appointment->user_id = 'oleh';
//        $appointment->connection = 'oleh';
//        $appointment->save();

        return redirect()->route('consultations')->with('message', 'Заявка успешно отправлена!');
    }

}
