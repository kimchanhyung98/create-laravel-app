<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->nickname,
            ],
            'type' => $this->type,
            'title' => $this->title,
            'hit' => $this->hit,
            'created_at' => $this->created_at,
        ];
    }
}
