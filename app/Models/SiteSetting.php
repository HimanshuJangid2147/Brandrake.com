<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_name',
        'store_email',
        'store_phone',
        'app_link',
        'store_address',
        'store_logo',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'youtube_link',
        'is_maintenance_mode',
        'maintenance_message',
        'notification_text',
        'herosection_title',
        'herosection_text',
        'herosection_description',
        'logo_url',
        'favicon_url',
        'footer_copyright',
    ];

    protected $casts = [
        'is_maintenance_mode' => 'boolean',
    ];
}
