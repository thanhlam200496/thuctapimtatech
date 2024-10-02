<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $articleCount = Article::count();
        $totalViews = Article::sum('views');

        // Lượt xem theo ngày trong 7 ngày gần nhất


        $viewsPerDay = Article::selectRaw('DATE(created_at) as date, SUM(views) as total_views')
        ->where('created_at', '>=', Carbon::now()->subDays(7))
        ->groupBy('date')
        ->orderBy('date')
        ->pluck('total_views', 'date');
    
    // dd($viewsPerDay);
    


        // Bài viết nhiều lượt xem nhất
        $topArticles = Article::orderBy('views', 'desc')->limit(5)->get();


        // Danh mục nhiều lượt xem nhất (giả sử mỗi bài viết thuộc về một danh mục)
        $topCategories = Category::withSum('articles', 'views')
            ->orderBy('articles_sum_views', 'desc')
            ->limit(5)
            ->get();


        return view('admin.index', compact('userCount', 'categoryCount', 'articleCount', 'totalViews', 'viewsPerDay', 'topArticles', 'topCategories'));
    }
}
