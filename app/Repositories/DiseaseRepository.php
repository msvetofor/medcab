<?php

namespace App\Repositories;

class DiseaseRepository
{
    public function getDiseases(): Collection
    {
        return Disease::query()->orderBy('created_at', 'DESC')->get();
    }
}
