<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $query = Comment::query();

        if ($request->has('search')) {
            
            $query->where('comments_content', 'like', '%' . $request->search . '%');
        }

        $comments = Comment::join('articles', 'articles.id', '=', 'comments.article_id')
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->select('comments.*', 'articles.name as article_name', 'users.name as user_name')
            ->get();
        // Thay thế get() bằng paginate(10) để phân trang 10 sản phẩm mỗi trang
        $comments = $query->paginate(10);
        return view("admin.comments.index", compact("comments"));
    }
    public function edit(string $id)
    {
        $comments = Comment::findOrFail($id);
        return view('admin.comments.update', compact('comments'));
    }
    
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu yêu cầu
        $request->validate([
            'comments_content' => 'required|string',
        ], [
            'required' => ':attribute không được để trống.',
            'string'   => ':attribute phải là chuỗi.',
        ], [
            'comments_content' => 'Nội dung bình luận',
        ]);
        $comments = Comment::findOrFail($id);
        try {
            $comments->update($request->all());
            return redirect()->route('comments.index')->with('success', 'Cập Nhật Thành Công');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Cập Nhật Thất Bại');
        }
    }
    function detail($id)  {
        $comments = Comment::join('articles', 'articles.id', '=', 'comments.article_id')
        ->join('users', 'users.id', '=', 'comments.user_id')
        ->where('comments.id',$id)->select('comments.*', 'articles.name as article_name', 'users.name as user_name')->first();
        return view('admin.comments.detail', compact('comments'));
    }
    public function destroy(Comment $comment)
    {
        try {
            $comment->delete();
            return redirect()->route('comment.index')->with('success', 'Xóa Thành Công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Xóa Thất Bại');
        }
    }
    /**
     * Show the form for creating a new resource.
     */


    //  check
    public function updatestt($id, Request $req)
{
    // Xác thực rằng trạng thái là hợp lệ
    $validatedData = $req->validate([
        'status' => 'required|in:pending,approved,rejected',
    ]);

    // Tìm bình luận theo ID và cập nhật trạng thái
    Comment::where('id', $id)->update(['status' => $validatedData['status']]);

    // Chuyển hướng và thông báo thành công
    return redirect()->route('comments.index')->with('success', 'Cập nhật trạng thái thành công.');
}


}


