<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable=[
        'tag_line',
        'phone_number',
        'email_address',
        'meta_title',
        'meta_description',
        'facebook',
        'instagram',
        'twitter',
        'tiktok',
        'linkedIn',
        'youtube',
        'primary_color',
        'secondary_color',
        'text_color',
        'logo_large',
        'logo_small',
        'fav_icon',
        'banner_image',
        'video_url',
        'landing_page_type',
        "footer_section_1",
        "footer_section_2",

        "women_empowered",
        "our_followers",
        "registered_chambers",
        "trainings",
        "announcement_image",
        "announcement_status",
        "announcement_url",
    ];
}
