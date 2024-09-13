<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "slug",
        "image",
        "category_id",
        "news_summary",
        "stock",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
