<?php

namespace App\Repositories;

use App\Enums\StatusEnum;
use App\Models\Record;
use Illuminate\Database\Eloquent\Collection;

class RecordRepository
{
    public function getRecords(): Collection
    {
        return Record::query()->orderBy('created_at', 'DESC')->get();
    }
}
