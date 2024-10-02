<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $table = 'faqs'; // Chỉ định tên bảng 'faqs'
    
    protected $fillable = ['question', 'answer', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
