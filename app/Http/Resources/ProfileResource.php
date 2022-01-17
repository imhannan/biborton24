<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ProfileResource extends JsonResource
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
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'birthday' => $this->birthday,
            'address' => $this->address,
            'bloodGroup' => $this->bloodGroup,
            'education' => $this->education,
            'phone' => $this->phone,
            'quote' => $this->quote,
            'user' => $this->user
        ];
    }
}
