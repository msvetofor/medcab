<?php

namespace App\Http\Controllers;

use App\Repositories\DiseaseRepository;
use Illuminate\Database\Eloquent\Collection;

class DiseaseController extends Controller
{
    public function __construct(protected DiseaseRepository $diseaseRepository)
    {
    }

    public function diseases()
    {
        $diseases = $this->diseaseRepository->getDiseases();

        return view('diseases', [
            'diseases' => $diseases,
        ]);
    }
}
