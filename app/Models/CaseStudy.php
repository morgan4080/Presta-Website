<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CaseStudy extends Model
{
    use InteractsWithMedia;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'client',
        'category',
        'description',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('case_study_image')
            ->registerMediaConversions(function (Media $media = null) {
                $this
                    ->addMediaConversion('thumb')
                    ->width(100)
                    ->height(100);
            });
    }
}
