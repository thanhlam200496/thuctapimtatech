<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'news_summary',
        'category_id',
        'slug',
        'description',
        'image',
        'views'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
