<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class CertificateController extends Controller
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function certificates()
    {
        $certificates = $this->userRepository->getCertificates();

        return view('certificates', [
            'certificates' => $certificates,
        ]);
    }
}
