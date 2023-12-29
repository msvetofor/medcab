<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AppointmentRepository;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function __construct(protected AppointmentRepository $appointmentRepository)
    {
    }
    public function consultations()
    {
        $appointmentsbusy = $this->appointmentRepository->getAppointmentsBusy();
        $appointmentsopen = $this->appointmentRepository->getAppointmentsOpen();
        return view('consultations', [
            'appointmentsbusy' => $appointmentsbusy,
            'appointmentsopen' => $appointmentsopen,
        ]);
    }
    public function appointmentlist()
    {
        $appointmentsbusy = $this->appointmentRepository->getAppointmentsBusy();
        $appointmentsopen = $this->appointmentRepository->getAppointmentsOpen();
        return view('appointmentlist',[
            'appointmentsbusy' => $appointmentsbusy,
            'appointmentsopen' => $appointmentsopen,
        ]);
    }

}
