<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'author' => $this->author,
            'author_image' => $this->author_image,
            'thumbnail' => $this->thumbnail,
            'category' => $this->category,
            'subcategory' => $this->subcategory,
            'comments' => $this->comments,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
