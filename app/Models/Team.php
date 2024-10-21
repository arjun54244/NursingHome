<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'experience',
        'slug',
        'image',
        'image_alt_tag',
        'description',
        'meta_title',
        'meta_desc',
        'tags',
        'status',
    ];
    protected $casts = [
        'tags' => 'array'
    ];
}
