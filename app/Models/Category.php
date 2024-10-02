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

    ] ;
    

    // Một category có nhiều câu hỏi (FAQs)
    public function faqs()
    {
        return $this->hasMany(Faq::class);

    ];

    // Thêm mối quan hệ với model Article
    public function articles()
    {
        return $this->hasMany(Article::class);

    }
}
