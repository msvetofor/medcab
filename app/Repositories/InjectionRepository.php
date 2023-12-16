<?php

namespace App\Repositories;

use App\Enums\StatusEnum;
use App\Models\Injection;
use Illuminate\Database\Eloquent\Collection;

class InjectionRepository
{
    public function getInjections(): Collection
    {
        return Injection::query()->orderBy('created_at', 'DESC')->get();
    }
}
