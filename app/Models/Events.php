<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    use HasUuids;

    protected $fillable=[
        "title",
        "date",
        "start_time",
        "end_time",
        "image",
        "type",
        "description",
        "is_active"
    ];
}
