<?php

namespace App\Http\Controllers;

use App\Repositories\RecordRepository;

class RecordController extends Controller
{

    public function __construct(protected RecordRepository $recordRepository)
    {
    }

    public function records()
    {
        $records = $this->recordRepository->getRecords();

        return view('medical_book', [
            'records' => $records,
        ]);
    }
}
