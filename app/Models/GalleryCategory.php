<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable=[
        "name",
        "is_active"
    ];
    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'cat_id', 'id');
    }

    public function latestGalleries()
    {
        return $this->hasMany(Gallery::class, 'cat_id', 'id')
            ->selectRaw('galleries.*, ROW_NUMBER() OVER (PARTITION BY cat_id ORDER BY created_at DESC) as rn')
            ->havingRaw('rn <= 3')
            ->orderBy('created_at', 'desc');
    }
}
