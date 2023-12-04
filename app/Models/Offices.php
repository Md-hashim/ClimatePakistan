<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable=
        [
            'city',
            'location',
            'detail',
            'email',
            'contact_number',
            'image',
        ];
}
