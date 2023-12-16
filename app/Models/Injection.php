<?php

namespace App\Models;

use App\Enums\UnitEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Injection extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public const COLLECTION_NAME_INJECTION = 'injection';

    protected $fillable = [
        'name',
        'doctor',
        'address',
        'description',
        'date',
    ];

    protected $casts = [
        'unit' => UnitEnum::class,
    ];

    public function getInjectionImage(): ?Media
    {
        return $this->getFirstMedia(self::COLLECTION_NAME_INJECTION);
    }

    public function getInjectionImages(): ?MediaCollection
    {
        return $this->getMedia(self::COLLECTION_NAME_INJECTION);
    }
}
