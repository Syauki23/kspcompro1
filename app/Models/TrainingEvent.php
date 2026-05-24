<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'event_date',
        'image',
        'is_active',
        'order_position',
    ];

    protected $casts = [
        'is_active'  => 'boolean',
        'event_date' => 'date',
    ];
}
