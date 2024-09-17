<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        $bannerAds = Advertisement::where('position', 'banner')->inRandomOrder()->first();
        
        $newArticle = Article::orderBy('created_at', 'desc')->take(5)->get(); // Lấy 5 bài viết mới nhất
    
        $sidebarAds = Advertisement::where('position', 'sidebar')->inRandomOrder()->first();
        
        // Truyền $newArticle vào view
        return view('clients/home', compact('sidebarAds', 'bannerAds', 'newArticle'));
    }
    function contact() {
        return view('clients/contact');
    }
    function faq() {
        return view('clients/faq');
    }
    function feedback() {
        return view('clients/feedback');
    }

}
