<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStories extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable=[
        "name",
        "email",
        "phone_number",
        "city",
        "images",
        "video_url",
        "story",
        "video_title",
        "video_description",
        "is_active"
    ];
}
