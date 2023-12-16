<?php

namespace App\Repositories;

class CertificateRepository
{
    public function getCertificates(): Collection
    {
        return Certificate::query()->orderBy('created_at', 'DESC')->get();
    }
}
