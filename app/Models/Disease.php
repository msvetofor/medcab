<?php

namespace App\Models;

use App\Enums\UnitEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Disease extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public const COLLECTION_NAME_DISEASE = 'disease';

    protected $fillable = [
        'name',
        'doctor',
        'description',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'unit' => UnitEnum::class,
    ];

    public function getDiseaseImage(): ?Media
    {
        return $this->getFirstMedia(self::COLLECTION_NAME_DISEASE);
    }

    public function getDiseaseImages(): ?MediaCollection
    {
        return $this->getMedia(self::COLLECTION_NAME_DISEASE);
    }
}
