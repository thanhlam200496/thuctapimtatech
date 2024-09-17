<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CateGoryController extends Controller
{
    public function index() {
        // Lấy tất cả các danh mục từ cơ sở dữ liệu
        $categories = Category::all();
        
        // Truyền danh mục vào view
        return view('clients.partials.header', compact('categories'));
    }
    
    // public function show($slug) {
    //     $category = Category::where('slug', $slug)->firstOrFail();
    //     $posts = $category->posts; // Hoặc tùy thuộc vào quan hệ bạn đã định nghĩa
    
    //     return view('category.show', compact('category', 'posts'));
    // }
}
