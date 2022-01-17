<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryController extends Controller
{
    public function index(): ResourceCollection
    {
        return CategoryResource::collection(Category::all());
    }

    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }

    public function posts(Category $category)
    {

        $posts = Post::whereBelongsTo($category)->latest()->paginate(13);

        return response()->json([
            'category' => $category,
            'posts' => $posts,
        ]);

//        return PostResource::collection($posts);
    }
}
