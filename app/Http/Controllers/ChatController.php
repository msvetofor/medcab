<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AppointmentRepository;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function __construct(protected AppointmentRepository $appointmentRepository)
    {
    }
    public function chat($appointmentId)
    {
        $appointmentsbusy = $this->appointmentRepository->getAppointmentsBusy();
        $appointmentsopen = $this->appointmentRepository->getAppointmentsOpen();
        $chat = $this->appointmentRepository->getChat($appointmentId);
        return view('chat', [
            'appointmentsbusy' => $appointmentsbusy,
            'appointmentsopen' => $appointmentsopen,
            'chat' => $chat,
        ]);
    }
    public function chat_update(Request $request) {
        $message = Appointment::where('id', $request->input('appointment_id'))->first();
        $message->chat .=   $request->input('message_field') . '|';
        $message->save();
//            $appointment = new ChatController();

//        $appointment->user_id = $request->input('name');
//        $appointment->user_id = 'oleh';
//        $appointment->connection = 'oleh';
//        $appointment->save();
//        Auth::user()->appointments()->find($request->input('appointment_id'))->update([
//            'chat' => $request->input('message_field'),
//
//        ]);

        return redirect()->route('chat',['appointmentId' => $request->input('appointment_id')]);
    }

}
