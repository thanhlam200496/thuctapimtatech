<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        // Tìm bài viết theo slug
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('clients.detail', compact('article', 'slug'));
    }
}
