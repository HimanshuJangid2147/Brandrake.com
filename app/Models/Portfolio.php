<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'description', // This is now the short description
        'mockup_image', // This is now the main/featured image
        'full_content',
        'gallery_images',
    ];

    /**
     * The attributes that should be cast.
     *
     * This tells Laravel to automatically convert the 'gallery_images'
     * JSON from the database into a PHP array and back.
     */
    protected $casts = [
        'gallery_images' => 'array',
    ];
}
