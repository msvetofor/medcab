<?php

namespace App\Models;

use App\Enums\UnitEnum;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Certificate extends Model implements HasMedia
{
    use CrudTrait;
    use HasFactory;
    use InteractsWithMedia;

    public const COLLECTION_NAME_CERTIFICATE = 'certificate';

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

    public function getCertificateImage(): ?Media
    {
        return $this->getFirstMedia(self::COLLECTION_NAME_CERTIFICATE);
    }

    public function getCertificateImages(): ?MediaCollection
    {
        return $this->getMedia(self::COLLECTION_NAME_CERTIFICATE);
    }
}
