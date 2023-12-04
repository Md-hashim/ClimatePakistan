<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreprnureRegistration extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable=[
        "full_name",
        "email",
        "cnic",
        "business_name",
        "phone_number",
        "education",
        "other_education",
        "business_type",
        "product_categories",
        "trainings",
        "target_market",
        "language",
        "other_language",
        "address",

        "social_media",
        "region",
        "exporter",
        "export_destination",

    ];
}
