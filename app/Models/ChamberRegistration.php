<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChamberRegistration extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable=[
        "chamber_name",
        "email",
        "registration_number",
        "business_address",
        "type",
    ];
}
