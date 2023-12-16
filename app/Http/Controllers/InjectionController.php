<?php

namespace App\Http\Controllers;

use App\Repositories\InjectionRepository;

class InjectionController extends Controller
{

    public function __construct(protected InjectionRepository $injectionRepository)
    {
    }

    public function injections()
    {
        $injections = $this->injectionRepository->getInjections();

        return view('injections', [
            'injections' => $injections,
        ]);
    }
}
