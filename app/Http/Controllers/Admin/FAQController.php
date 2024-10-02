<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Faq;
class FAQController extends Controller
{
    // Hiển thị danh sách FAQ theo category
    public function index()
    {
        // Lấy tất cả categories cùng với các FAQs liên quan
        $categories = Category::with('faqs')->get();

        // Trả về view với biến categories chứa dữ liệu đã truy vấn
        return view('admin.faqs.index', compact('categories'));
    }

    // Hiển thị form tạo câu hỏi FAQ
    public function create()
    {
        $categories = Category::all();
        return view('admin.faqs.create', compact('categories'));
    }

    // Lưu câu hỏi FAQ mới
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        try {
            Faq::create($request->all());
            return redirect()->route('faqs.index')->with('success', 'faqs create successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while create the faqs.']);
        }
    }

    // update
    public function edit(Faq $faq)
    {
        // Lấy tất cả danh mục để hiển thị trong form chọn danh mục
        $categories = Category::all();

        // Trả về view edit và truyền dữ liệu của FAQ cần sửa và danh sách categories
        return view('admin.faqs.edit', compact('faq', 'categories'));
    }

    public function update(Request $request, Faq $faq)
    {
        // Validate dữ liệu
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Cập nhật dữ liệu FAQ
        try {
            $faq->update([
                'category_id' => $request->category_id,
                'question' => $request->question,
                'answer' => $request->answer,
            ]);
            return redirect()->route('faqs.index')->with('success', 'faqs update successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the faqs.']);
        }
    }
    public function destroy(Faq $faq)
    {
        try {
            $faq->delete();
            return redirect()->route('faqs.index')->with('success', 'faqs deleted successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while delete the faqs.']);
        }
    }
}
