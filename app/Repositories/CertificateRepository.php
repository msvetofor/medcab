<?php

namespace App\Repositories;

use App\Enums\StatusEnum;
use App\Models\Certificate;
use Illuminate\Database\Eloquent\Collection;

class CertificateRepository
{
    public function getCertificates(): Collection
    {
        return Certificate::query()->orderBy('created_at', 'DESC')->get();
    }
}
