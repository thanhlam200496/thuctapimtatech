<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'status',
        'parent_id',
    ];

    // Thêm mối quan hệ với model Article
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
