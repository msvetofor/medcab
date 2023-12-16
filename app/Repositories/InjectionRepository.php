<?php

namespace App\Repositories;

class InjectionRepository
{
    public function getInjections(): Collection
    {
        return Injection::query()->orderBy('created_at', 'DESC')->get();
    }
}
