<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(Request $request)
    {
        // Quảng cáo
        $bannerAds = Advertisement::where('position', 'banner')->inRandomOrder()->first();
        $sidebarAds = Advertisement::where('position', 'sidebar')->inRandomOrder()->first();

        // Bài viết mới nhất
        $newArticle = Article::query();
        if ($request->name != '' && $request->name != null) {
            $newArticle->where('name', 'like', '%' . $request->name . '%');
        }
        $newArticle = $newArticle->orderBy('created_at', 'desc')->take(5)->get();

        // Bài viết ngẫu nhiên
        $randomArticle = Article::inRandomOrder()->take(5)->get();

        // Danh mục
        $categories = Category::select('categories.*')
            ->join('articles', 'articles.category_id', '=', 'categories.id')
            ->groupBy('categories.id')
            ->selectRaw('COUNT(articles.category_id) as article_count')
            ->get();

        // Khởi tạo biến cho bài viết đã lọc
        $filteredArticles = Article::all(); // Lấy tất cả bài viết nếu không có lọc

        // Nếu có tham số lọc, áp dụng lọc
        if ($request->has('date') || $request->has('category') || $request->has('views')) {
            $query = Article::query();

            // Lọc theo ngày đăng
            if ($request->date == 'newest') {
                $query->orderBy('created_at', 'desc');
            } elseif ($request->date == 'oldest') {
                $query->orderBy('created_at', 'asc');
            }

            // Lọc theo danh mục
            if ($request->category) {
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
        }

        return view('clients.home', compact('sidebarAds', 'bannerAds', 'newArticle', 'randomArticle', 'categories', 'filteredArticles'));
    }

    function contact()
    {
        return view('clients.contact');
    }

    function faq()
    {
        return view('clients.faq');
    }

    function feedback()
    {
        return view('clients.feedback');
    }
}
