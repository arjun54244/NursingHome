<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'title',
        'short_description',
        'icon',
        'image',
        'image_alt_tag',
        'description',
        'slug',
        'meta_title',
        'meta_desc',
        'tags',
        'status',
    ];
    protected $casts = [
        'tags' => 'array'
    ];
}
