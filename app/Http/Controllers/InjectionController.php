<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class InjectionController extends Controller
{

    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function injections()
    {
        $injections = $this->userRepository->getInjections();

        return view('injections', [
            'injections' => $injections,
        ]);
    }
}
