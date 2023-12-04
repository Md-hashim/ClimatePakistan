<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTDAP extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        "banner_image",
        "page_title",
        "meta_title",
        "meta_description",

        "section_1_title",
        "section_1_content",
        "section_1_image",


        "section_2_title",
        "section_2_content",
        "section_2_image",


        "section_3_title",
        "section_3_content",
        "section_3_image",


        "section_4_title",
        "section_4_content",
        "section_4_image",


    ];
}
