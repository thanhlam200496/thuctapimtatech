<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()  {
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
    public function store(Request $request)  {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'message'=>'required',
            ]
        );
        // dd($request->all('name','email','message'));
        try {
            Contact::create($request->all('name','email','message'));
            return redirect()->route('form-contact')->with('success', 'Contact created successfully.');
        } catch (\Throwable $th) {  
            // dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while creating the Contacts.']);
        }
    }
}
