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
        $bannerAds = Advertisement::where('position', 'banner')->inRandomOrder()->first();
        $newArticle = Article::query();
        if ($request->name != '' && $request->name != null) {
            $newArticle->where('name', 'like', '%' . $request->name . '%');
        }
        $newArticle = $newArticle->orderBy('created_at', 'desc')->take(5)->get();
        $sidebarAds = Advertisement::where('position', 'sidebar')->inRandomOrder()->first();
        $randomArticle=Article::inRandomOrder()->take(5)->get();
        $categories = Category::select('categories.*')
        ->join('articles', 'articles.category_id', '=', 'categories.id')
        ->groupBy('categories.id')
        ->selectRaw('COUNT(articles.category_id) as article_count')
        ->get();
    
        return view('clients/home', compact('sidebarAds', 'bannerAds', 'newArticle','randomArticle','categories'));
    }

    function contact()
    {
        return view('clients/contact');
    }
    function faq()
    {
        return view('clients/faq');
    }
    function feedback()
    {
        return view('clients/feedback');
    }
}
