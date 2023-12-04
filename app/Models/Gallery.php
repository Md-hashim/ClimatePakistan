<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable=[
        'title',
        'description',
        'image',
        'video',
        'type',
        'cat_id',
        'is_active'
    ];
    public function category()
    {
        return $this->belongsTo(GalleryCategory::class,'cat_id','id');
    }
}
