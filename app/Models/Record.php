<?php

namespace App\Models;

use App\Enums\UnitEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Record extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public const COLLECTION_NAME_RECORD = 'record';

    protected $fillable = [
        'name',
        'doctor',
        'address',
        'description',
        'treatment',
        'date',
    ];

    protected $casts = [
        'unit' => UnitEnum::class,
    ];

    public function getRecordImage(): ?Media
    {
        return $this->getFirstMedia(self::COLLECTION_NAME_INJECTION);
    }

    public function getRecordImages(): ?MediaCollection
    {
        return $this->getMedia(self::COLLECTION_NAME_INJECTION);
    }
}
