<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRepository extends Model
{
    use HasFactory;
    use HasUuids;
    protected  $fillable=[
        'title',
        'file',
        'cat_id'
    ];
    public function repositoryCategory()
    {
        return $this->belongsTo(RepositoryCategory::class, 'cat_id', 'id');
    }
}
