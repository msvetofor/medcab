<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AppointmentRepository;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct(protected AppointmentRepository $appointmentRepository)
    {
    }
    public function doctor($DoctorId)
    {
        $doctors = $this->appointmentRepository->getDoctor($DoctorId);

        return view('doctor', [
            'doctors' => $doctors,
        ]);
    }
}
