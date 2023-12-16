<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class RecordController extends Controller
{

    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function records()
    {
        $records = $this->userRepository->getRecords();

        return view('records', [
            'records' => $records,
        ]);
    }
}
