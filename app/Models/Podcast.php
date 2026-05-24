<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'episode_number',
        'duration',
        'publish_date',
        'youtube_id',
        'spotify_url',
        'description',
        'category',
        'is_featured',
        'image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];
}
