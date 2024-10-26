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

        // Tăng lượt xem cho bài viết
        $article->increment('views');

        // Lấy tất cả bình luận (nếu cần)
        $comments = Comment::where('article_id', $article->id)->where('status', 'approved')->orderBy('created_at', 'desc')->get(); // Đây phải trả về một Collection

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

        return view('clients.detail', compact('article', 'slug', 'comments', 'bannerAds', 'sidebarAds', 'articlesTrending', 'categories', 'randomArticle'));
    }


    public function filter(Request $request, $id)
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
        if (isset($id) && !empty($id)) {
            # code...
        }
        // Nếu có tham số lọc, áp dụng lọc
        if ($request->has('date') || $request->has('category') || $request->has('views') || $request->name != null || $request->name != '' || isset($id) || !empty($id)) {
            $query = Article::query()
                ->join('categories', 'categories.id', '=', 'articles.category_id')
                ->where('categories.status', 1);  // Điều kiện lọc category với status = 1

            if (isset($id) && !empty($id)) {
                $categoryIds = Category::where('id', $id)
                    ->orWhere('parent_id', $id)
                    ->pluck('id')
                    ->toArray();

                // Lọc các bài viết thuộc các danh mục trong danh sách ID
                $query->whereIn('articles.category_id', $categoryIds);
            }
            // Lọc theo tên bài viết, nếu có

            if ($request->name != '' && $request->name != null) {
                $query->where('articles.name', 'like', '%' . $request->name . '%');
            }

            // Sắp xếp theo ngày
            if ($request->has('date')) {
                if ($request->date == 'newest') {
                    $query->orderBy('articles.created_at', 'desc');
                } elseif ($request->date == 'oldest') {
                    $query->orderBy('articles.created_at', 'asc');
                }
            }
            // // Lọc theo danh mục, bao gồm danh mục cha và các danh mục con
            // if ($request->filled('category')) {
            //     // Lấy danh sách các ID của danh mục cha và các danh mục con
            //     $categoryIds = Category::where('id', $request->category)
            //         ->orWhere('parent_id', $request->category)
            //         ->pluck('id')
            //         ->toArray();

            //     // Lọc các bài viết thuộc các danh mục trong danh sách ID
            //     $query->whereIn('articles.category_id', $categoryIds);
            // }
            // Lọc theo danh mục, nếu có
            if ($request->has('category')) {
                // Lấy danh sách các ID của danh mục cha và các danh mục con
                $categoryIds = Category::where('id', $id)
                    ->orWhere('parent_id', $id)
                    ->pluck('id')
                    ->toArray();

                // Lọc các bài viết thuộc các danh mục trong danh sách ID
                $query->whereIn('articles.category_id', $categoryIds);
            }

            // Lọc theo lượt xem
            if ($request->has('views')) {
                if ($request->views == 'most_viewed') {
                    $query->orderBy('articles.views', 'desc');
                } elseif ($request->views == 'least_viewed') {
                    $query->orderBy('articles.views', 'asc');
                }
            }

            // Lấy các bài viết đã lọc
            $filteredArticles = $query->get(['articles.*']);  // Chỉ lấy các trường của bảng articles
            // dd($filteredArticles);
        }

        return view('clients.home', compact('articlesTrending', 'sidebarAds', 'bannerAds', 'newArticle', 'randomArticle', 'categories', 'filteredArticles'));
    }
}
