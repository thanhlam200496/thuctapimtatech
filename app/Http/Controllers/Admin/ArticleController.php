<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Thay thế get() bằng paginate(10) để phân trang 10 sản phẩm mỗi trang
        $articles = $query->paginate(10);

        return view("admin.article.index", compact("articles"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.article.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->storeAs("public/images", $fileName);
        $request->merge(['image' => $fileName]);
        try {
             Article::create($request->all());
            return redirect()->route('article.index')->with('success', 'articles created successfully.');
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while creating the articles.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articles = Article::findOrFail($id);
        $categories = Category::all(); // Lấy tất cả các danh mục để hiển thị trong dropdown
        return view('admin.article.edit', compact('articles', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu yêu cầu
        $request->validate([
            'name' => 'required|string|max:100',
            'news_summary' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|string|max:100|unique:articles,slug,' . $id,
            'description' => 'nullable|string',
            'views' => 'nullable|integer|min:0', // Validate views
        ]);
    
        $article = Article::findOrFail($id);
    
        // Xử lý file ảnh
        if ($request->hasFile('photo')) {
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/images", $fileName);
            $article->image = $fileName;
        }
    
        // Cập nhật các trường khác
        $article->name = $request->input('name');
        $article->news_summary = $request->input('news_summary');
        $article->category_id = $request->input('category_id');
        $article->slug = $request->input('slug');
        $article->description = $request->input('description');
        $article->views = $request->input('views', 0); // Cập nhật views
    
        try {
            $article->save();
            return redirect()->route('article.index')->with('success', 'article updated successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the article.']);
        }
    }
    




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        try {
            $article->delete();
            return redirect()->route('article.index')->with('success', 'Xóa Thành Công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xóa Thất Bại');
        }
    }
}
