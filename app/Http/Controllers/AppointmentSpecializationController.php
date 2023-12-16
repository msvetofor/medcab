<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AppointmentRepository;
use Illuminate\Http\Request;

class AppointmentSpecializationController extends Controller
{
    public function __construct(protected AppointmentRepository $specializationRepository)
    {
    }
    public function appointmentspecialization()
    {
        $specializations = $this->specializationRepository->getSpecialization();
        return view('appointmentspecialization', [
            'specializations' => $specializations,
        ]);
    }
}
