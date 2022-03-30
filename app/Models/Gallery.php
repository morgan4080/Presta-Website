<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'thumbNal',
        'description',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery_image')
            ->registerMediaConversions(function (Media $media = null) {
                $this
                    ->addMediaConversion('thumb')
                    ->width(100)
                    ->height(100);
            });
    }

}
