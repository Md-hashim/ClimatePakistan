<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use HasUuids;
    protected  $fillable=[
        'title',
        'image',
        'short_description',
        'description',
        'cat_id',
        'is_active',
    ];
    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'cat_id', 'id');
    }
    public function courseItem()
    {
        return $this->hasMany(CoureseItem::class, 'course_id', 'id');
    }


}
