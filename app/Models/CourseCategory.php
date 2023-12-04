<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable=[
        "name",
        "is_active"
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'cat_id', 'id');
    }
}
