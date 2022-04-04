<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
    'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gallery() {
        return $this->belongsTo(gallery::class);
    }
    use HasFactory;
}
