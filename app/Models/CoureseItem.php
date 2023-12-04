<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoureseItem extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable=[
        'title',
        'video_url',
        'image',
        'document',
        'course_id',
        'is_active',
        'video',
        'type'
    ];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
