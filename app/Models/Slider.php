<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable=
        [
            'image',
            'title',
            'description',
            'category',
            'is_active'
        ];
}
