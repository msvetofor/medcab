<?php

namespace App\Http\Repositories;

use App\Models\Specialization;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class AppointmentRepository
{
    public function getSpecialization(): Collection
    {
        return Specialization::query()->orderBy('created_at', 'DESC')->get();
    }
    public function getDoctors(): Collection{
        return User::query()->where('role', '=', 'Врач')->orderBy('created_at', 'DESC')->get();
    }
    public function getDoctor($DoctorId): Collection{
        return User::query()->where('id', '=', $DoctorId)->get();
    }
}
