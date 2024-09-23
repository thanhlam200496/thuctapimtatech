<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        // Tìm bài viết theo slug
        $article = Article::where('slug', $slug)->firstOrFail();
        $comments= Comment::all();
        
        return view('clients.detail', compact('article', 'slug', 'comments'));
    }
    
}
