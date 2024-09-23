<?php

namespace App\Http\Controllers\clients;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{








    public function addcmt(Request $request, $articleId)
{
    $article = Article::findOrFail($articleId);
    // Lấy tất cả các comment theo bài viết
    $comments = Comment::where('article_id', $articleId)->orderBy('created_at', 'desc')->get();

    if ($request->isMethod('post')) {
        $request->validate([
            'comments_content' => 'required|string',
        ]);

        Comment::create([
            'article_id' => $articleId,
            'user_id' => Auth::id(),
            'comments_content' => $request->comments_content,
        ]);

        // Redirect quay lại với thông báo
        return redirect()->back()->with(['success' => 'Bình luận thành công']);
    }

    // Trả về view với danh sách bình luận
    return view('clients.detail', compact('article', 'comments'));
}
}
