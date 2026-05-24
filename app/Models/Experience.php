<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'company',
        'title',
        'description',
        'category',
        'color_scheme',
        'icon',
        'order_position',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
