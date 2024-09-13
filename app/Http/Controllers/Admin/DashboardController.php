<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $articleCount = Article::count();   
        // $contactCount = Contact::count();
        return view('admin.index', compact('userCount', 'categoryCount', 'articleCount'));
        // 'contactCount'
    }
}
