<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        // Tìm bài viết theo slug
        $article = Article::where('slug', $slug)->firstOrFail();
        $comment_article= Comment::where('article_id',$article->id)->get();
        // dd($comments);
        return view('clients.detail', compact('article', 'slug', 'comment_article'));
    }
    public function result(Request $request,$id)  {
        
            $bannerAds = Advertisement::where('position', 'banner')->inRandomOrder()->first();
            $newArticle = Article::where('category_id',$id)->get();
            
           
            $sidebarAds = Advertisement::where('position', 'sidebar')->inRandomOrder()->first();
            $randomArticle=Article::inRandomOrder()->take(5)->get();
            $categories = Category::select('categories.*')
            ->join('articles', 'articles.category_id', '=', 'categories.id')
            ->groupBy('categories.id')
            ->selectRaw('COUNT(articles.category_id) as article_count')
            ->get();
        
            return view('clients/home', compact('sidebarAds', 'bannerAds', 'newArticle','randomArticle','categories'));
        
    }
    
}
