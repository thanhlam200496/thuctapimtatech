<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
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
    
    // Tăng lượt xem cho bài viết
    $article->increment('views');
    
    // Lấy tất cả bình luận (nếu cần)
    $comments = Comment::where('article_id', $article->id)->get(); // Đây phải trả về một Collection

    return view('clients.detail', compact('article', 'slug', 'comments'));
}


    public function filter(Request $request)
    {
        $query = Article::query();
        
        // Lọc theo ngày đăng
        if ($request->date == 'newest') {
            $query->orderBy('created_at', 'desc');
        } elseif ($request->date == 'oldest') {
            $query->orderBy('created_at', 'asc');
        }
    
        // Lọc theo danh mục
        if ($request->category && $request->category !== 'null') {
            $query->where('category_id', $request->category);
        }
    
        // Lọc theo lượt xem
        if ($request->views == 'most_viewed') {
            $query->orderBy('views', 'desc');
        } elseif ($request->views == 'least_viewed') {
            $query->orderBy('views', 'asc');
        }
    
        // Lấy các bài viết đã lọc
        $filteredArticles = $query->get();
    
        // Lấy bài viết ngẫu nhiên
        $randomArticle = Article::inRandomOrder()->take(5)->get();
    
        // Lấy bài viết mới nhất (5 bài viết mới)
        $newArticle = Article::orderBy('created_at', 'desc')->take(5)->get();
    
        // Lấy lại danh mục để hiển thị trong form
        $categories = Category::all();
    
        return view('clients.home', compact('filteredArticles', 'randomArticle', 'newArticle', 'categories'));
    }


    
}
