<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
     use HasUuids;


     protected  $fillable = [
         "title",
         "slug",
         "banner_image",
         "content",
         "status"
     ];

}
