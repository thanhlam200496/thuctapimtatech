<?php

namespace App\Http\Controllers\clients;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function addcomment(Request $req) {
        $req->validate(['comments_content'=>'required'],);
        Comment::create($req->all('article_id','user_id','comments_content'));
        return redirect()->back()->with(['message'=>'Bình luận thành công']);
    }

}
