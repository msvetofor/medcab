<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    public function getCertificates(): Collection
    {
        return Auth::user()->certificates()->get();
    }
    public function getInjections(): Collection
    {
        return Auth::user()->injections()->get();
    }
    public function getRecords(): Collection
    {
        return Auth::user()->records()->get();
    }
}
