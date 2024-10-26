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

        // 4 bài viết nhiều lượt xem nhất
        $articlesTrending = Article::orderBy('views', 'DESC')->limit(4)->get();

        // Bài viết ngẫu nhiên
        $randomArticle = Article::inRandomOrder()->take(4)->get();

        // Danh mục
        $categories = Category::select('categories.*')
            ->join('articles', 'articles.category_id', '=', 'categories.id')
            ->groupBy('categories.id')
            ->selectRaw('COUNT(articles.category_id) as article_count')->where('categories.status', 1)
            ->get();

        // Bài viết mới nhất
        $newArticle = Article::select('articles.*')
            ->join('categories', 'categories.id', '=', 'articles.category_id') // Thêm join với bảng categories
            ->where('categories.status', 1) // Chỉ lấy các articles có categories với status = 1
            ->orderBy('articles.created_at', 'desc') // Sắp xếp các articles theo thời gian tạo giảm dần
            ->paginate(10); // Phân trang kết quả, mỗi trang có 10 bài viết

        // Khởi tạo biến cho bài viết đã lọc
        $filteredArticles = null; // Lấy tất cả bài viết nếu không có lọc

        // Nếu có tham số lọc, áp dụng lọc
        if ($request->filled('date') || $request->filled('category') || $request->filled('views') || $request->filled('name')) {
            $query = Article::query()
                ->join('categories', 'categories.id', '=', 'articles.category_id')
                ->where('categories.status', 1);  // Điều kiện lọc category với status = 1

            // Lọc theo tên bài viết, nếu có
            if ($request->filled('name')) {
                $query->where('articles.name', 'like', '%' . trim($request->name) . '%')->orwhere('categories.name', 'like', '%' . trim($request->name) . '%');
            }

            // Sắp xếp theo ngày
            if ($request->filled('date')) {
                if ($request->date == 'newest') {
                    $query->orderBy('articles.created_at', 'desc');
                } elseif ($request->date == 'oldest') {
                    $query->orderBy('articles.created_at', 'asc');
                }
            }

            // Lọc theo danh mục, bao gồm danh mục cha và các danh mục con
            if ($request->filled('category')) {
                // Lấy danh sách các ID của danh mục cha và các danh mục con
                $categoryIds = Category::where('id', $request->category)
                    ->orWhere('parent_id', $request->category)
                    ->pluck('id')
                    ->toArray();

                // Lọc các bài viết thuộc các danh mục trong danh sách ID
                $query->whereIn('articles.category_id', $categoryIds);
            }

            // Lọc theo lượt xem
            if ($request->filled('views')) {
                if ($request->views == 'most_viewed') {
                    $query->orderBy('articles.views', 'desc');
                } elseif ($request->views == 'least_viewed') {
                    $query->orderBy('articles.views', 'asc');
                }
            }

            // Lấy các bài viết đã lọc
            $filteredArticles = $query->get(['articles.*']);  // Chỉ lấy các trường của bảng articles
        }


        return view('clients.home', compact('articlesTrending', 'sidebarAds', 'bannerAds', 'newArticle', 'randomArticle', 'categories', 'filteredArticles'));
    }

    function contact()
    {
        // Quảng cáo
        $bannerAds = Advertisement::where('position', 'banner')->inRandomOrder()->first();
        $sidebarAds = Advertisement::where('position', 'sidebar')->inRandomOrder()->first();

        // 4 bài viết nhiều lượt xem nhất
        $articlesTrending = Article::orderBy('views', 'DESC')->limit(4)->get();

        // Bài viết ngẫu nhiên
        $randomArticle = Article::inRandomOrder()->take(4)->get();

        // Danh mục
        $categories = Category::select('categories.*')
            ->join('articles', 'articles.category_id', '=', 'categories.id')
            ->groupBy('categories.id')
            ->selectRaw('COUNT(articles.category_id) as article_count')->where('categories.status', 1)
            ->get();
        return view('clients.contact', compact('bannerAds', 'sidebarAds', 'articlesTrending', 'categories', 'randomArticle'));
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
