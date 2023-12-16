<?php

namespace App\Repositories;

class RecordRepository
{
    public function getRecords(): Collection
    {
        return Record::query()->orderBy('created_at', 'DESC')->get();
    }
}
