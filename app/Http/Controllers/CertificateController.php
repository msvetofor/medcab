<?php

namespace App\Http\Controllers;

use App\Repositories\CertificateRepository;

class CertificateController extends Controller
{
    public function __construct(protected CertificateRepository $certificateRepository)
    {
    }

    public function certificates()
    {
        $certificates = $this->certificateRepository->getCertificates();

        return view('certificates', [
            'certificates' => $certificates,
        ]);
    }
}
