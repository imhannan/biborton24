<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Post $post)
    {
        return CommentResource::collection($post->comments);
    }

    public function show(Post $post, Comment $comment)
    {
        return new CommentResource($comment);
    }

    public function store(Post $post, Request $request)
    {
        $request->validate([
            'body' => ['required']
        ]);

        $comment = Comment::create([
            'user_id' => $request->user()->id,
            'post_id' => $post->id,
            'body' => $request->body
        ]);

        return new CommentResource($comment);
    }
}
