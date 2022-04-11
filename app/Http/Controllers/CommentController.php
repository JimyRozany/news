<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentController extends Controller
{
    public function addComment(Request $request ,$user_id, $article_id)
    {
        $request->validate([
            'comment_body' => 'required'
        ]);

        $comments = new Comment();

        $comments->comment_body = $request->comment_body ;
        $comments->article_id = $article_id;
        $comments->user_id = $user_id;
        $comments->save();

        return back();


    }
}
