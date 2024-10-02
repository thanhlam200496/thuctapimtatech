<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Faq;
class FAQController extends Controller
{
    public function index()
    {
        // Lấy tất cả các danh mục và FAQs liên quan
        $categories = Category::with('faqs')->get();
    
        // Trả dữ liệu về view 'client.faqs.index'
        return view('clients.faq', compact('categories'));
    }
    
}
