<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::latest()->paginate(8));
    }

    public function show(Post $post): PostResource
    {
        return new PostResource($post);
    }
}
