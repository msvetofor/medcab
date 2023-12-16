<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AppointmentRepository;
use Illuminate\Http\Request;

class AppointmentDoctorController extends Controller
{
    public function __construct(protected AppointmentRepository $appointmentRepository)
    {
    }
    public function appointmentdoctor($userSpecialization)
    {
        $specializations = $this->appointmentRepository->getSpecialization();
        $doctors = $this->appointmentRepository->getDoctors();
        return view('appointmentdoctor', [
            'specializations' => $specializations,
            'doctors' => $doctors,
            'userSpecialization' => $userSpecialization
        ]);
    }


}
