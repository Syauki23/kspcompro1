<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhilosophyValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter',
        'index',
        'title',
        'description',
        'features',
        'icon'
    ];

    protected $casts = [
        'features' => 'array', // JSON cast
    ];
}
