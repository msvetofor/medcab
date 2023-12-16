<?php

namespace App\Repositories;

use App\Enums\StatusEnum;
use App\Models\Disease;
use Illuminate\Database\Eloquent\Collection;

class DiseaseRepository
{
    public function getDiseases(): Collection
    {
        return Disease::query()->orderBy('created_at', 'DESC')->get();
    }
}
