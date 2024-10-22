<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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

        $perPage = $request->input('per_page', 10);
        $articles = $query->latest()->paginate($perPage);

        return view("admin.article.index", compact("articles"));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view("admin.article.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'news_summary' => 'nullable|string',
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|string|max:100|unique:articles',
            'description' => 'nullable|string',
        ], [
            'name.required' => 'Tên bài viết là bắt buộc.',
            'name.max' => 'Tên bài viết không được vượt quá 100 ký tự.',
            'photo.required' => 'Ảnh là bắt buộc.',
            'photo.image' => 'File phải là ảnh.',
            'photo.mimes' => 'Ảnh phải có định dạng: jpg, png, jpeg.',
            'photo.max' => 'Kích thước ảnh tối đa là 2MB.',
            'category_id.required' => 'Vui lòng chọn danh mục.',
            'category_id.exists' => 'Danh mục không tồn tại.',
            'slug.required' => 'Slug là bắt buộc.',
            'slug.unique' => 'Slug đã tồn tại.',
            'slug.max' => 'Slug không được vượt quá 100 ký tự.',
        ]);

        try {
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName = time() . '_' . $file->getClientOriginalName();
                
                // Kiểm tra và tạo thư mục nếu chưa tồn tại
                if (!Storage::exists('public/images')) {
                    Storage::makeDirectory('public/images');
                }
                
                // Upload file với try-catch riêng để bắt lỗi upload
                try {
                    $path = $file->storeAs('public/images', $fileName);
                    if (!$path) {
                        throw new \Exception('Không thể lưu file.');
                    }
                } catch (\Exception $e) {
                    Log::error('Error uploading file: ' . $e->getMessage());
                    return redirect()
                        ->back()
                        ->withInput()
                        ->withErrors(['photo' => 'Không thể upload ảnh. Vui lòng thử lại.']);
                }

                // Tạo bài viết với try-catch riêng
                try {
                    $article = Article::create([
                        'name' => $validatedData['name'],
                        'news_summary' => $validatedData['news_summary'],
                        'category_id' => $validatedData['category_id'],
                        'slug' => $validatedData['slug'],
                        'description' => $validatedData['description'],
                        'image' => $fileName,
                        'views' => 0
                    ]);

                    return redirect()
                        ->route('article.index')
                        ->with('success', 'Thêm bài viết thành công.');
                } catch (\Exception $e) {
                    // Nếu tạo bài viết thất bại, xóa file đã upload
                    Storage::delete('public/images/' . $fileName);
                    Log::error('Error creating article record: ' . $e->getMessage());
                    throw $e;
                }
            }

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['photo' => 'Vui lòng chọn ảnh cho bài viết.']);

        } catch (\Exception $e) {
            Log::error('Error in store method: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Có lỗi xảy ra khi tạo bài viết: ' . $e->getMessage()]);
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
