<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrameWork extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        "title",
        "video",
        "file"
    ];
}
