<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'title',
        'short_description',
        'description',
        'image',
        'image_alt_tag',
        'slug',
        'meta_title',
        'meta_desc',
        'tags',
        'status'
    
    ];

    protected $casts = [
        'tags' => 'array'
    ];
}
