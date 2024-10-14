<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Hiển thị danh sách bài viết với phân trang
     */
    public function index(Request $request)
    {
        $query = Article::query();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $perPage = $request->input('per_page', 10); // Cho phép thay đổi số lượng bài viết trên mỗi trang
        $articles = $query->paginate($perPage);

        return view("admin.article.index", compact("articles"));
    }

    /**
     * Hiển thị form tạo bài viết mới
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.article.create", compact("categories"));
    }

    /**
     * Lưu bài viết mới
     */
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:100',
            'news_summary' => 'nullable|string',
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|string|max:100|unique:articles,slug',
            'description' => 'nullable|string',
            'views' => 'nullable|integer|min:0',
        ], [
            'name.required' => 'Tên bài viết là bắt buộc.',
            'name.string' => 'Tên bài viết phải là chuỗi ký tự.',
            'name.max' => 'Tên bài viết không được vượt quá 100 ký tự.',

            'photo.required' => 'Ảnh là bắt buộc.',
            'photo.image' => 'Ảnh không hợp lệ, định dạng phải là jpg, png hoặc jpeg.',
            'photo.mimes' => 'Ảnh phải có định dạng jpg, png hoặc jpeg.',
            'photo.max' => 'Dung lượng ảnh tối đa là 2MB.',

            'category_id.required' => 'Danh mục là bắt buộc.',
            'category_id.exists' => 'Danh mục không hợp lệ.',

            'slug.required' => 'Slug là bắt buộc.',
            'slug.unique' => 'Slug đã tồn tại, vui lòng chọn slug khác.',
            'slug.max' => 'Slug không được vượt quá 100 ký tự.',

            'views.integer' => 'Lượt xem phải là số nguyên.',
            'views.min' => 'Lượt xem phải là số không âm.',
        ]);

        // Xử lý file ảnh
        $fileName = time() . '_' . $request->photo->getClientOriginalName();
        $request->photo->storeAs("public/images", $fileName);
        $request->merge(['image' => $fileName]);

        try {
            Article::create($request->all());
            return redirect()->route('article.index')->with('success', 'Tạo bài viết thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Lỗi: ' . $th->getMessage()]);
        }
    }

    /**
     * Hiển thị form chỉnh sửa bài viết
     */
    public function edit(string $id)
    {
        $articles = Article::findOrFail($id);
        $categories = Category::all(); // Lấy tất cả các danh mục để hiển thị trong dropdown
        return view('admin.article.edit', compact('articles', 'categories'));
    }

    /**
     * Cập nhật bài viết
     */
    public function update(Request $request, $id)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:100',
            'news_summary' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|string|max:100|unique:articles,slug,' . $id,
            'description' => 'nullable|string',
            'views' => 'nullable|integer|min:0',
        ], [
            'name.required' => 'Tên bài viết là bắt buộc.',
            'name.string' => 'Tên bài viết phải là chuỗi ký tự.',
            'name.max' => 'Tên bài viết không được vượt quá 100 ký tự.',

            'photo.image' => 'Ảnh không hợp lệ, định dạng phải là jpg, png hoặc jpeg.',
            'photo.mimes' => 'Ảnh phải có định dạng jpg, png hoặc jpeg.',
            'photo.max' => 'Dung lượng ảnh tối đa là 2MB.',

            'category_id.required' => 'Danh mục là bắt buộc.',
            'category_id.exists' => 'Danh mục không hợp lệ.',

            'slug.required' => 'Slug là bắt buộc.',
            'slug.unique' => 'Slug đã tồn tại, vui lòng chọn slug khác.',
            'slug.max' => 'Slug không được vượt quá 100 ký tự.',

            'views.integer' => 'Lượt xem phải là số nguyên.',
            'views.min' => 'Lượt xem phải là số không âm.',
        ]);

        $article = Article::findOrFail($id);

        // Xử lý file ảnh nếu có upload ảnh mới
        if ($request->hasFile('photo')) {
            $fileName = time() . '_' . $request->photo->getClientOriginalName();
            $request->photo->storeAs("public/images", $fileName);
            $article->image = $fileName; // Cập nhật ảnh mới
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
            return redirect()->route('article.index')->with('success', 'Cập nhật bài viết thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Lỗi: ' . $th->getMessage()]);
        }
    }

    /**
     * Xóa bài viết
     */
    public function destroy(Article $article)
    {
        try {
            $article->delete();
            return redirect()->route('article.index')->with('success', 'Xóa bài viết thành công.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Lỗi: ' . $th->getMessage());
        }
    }
}
