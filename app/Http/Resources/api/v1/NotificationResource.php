<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->uuid,
            'type' => $this->type, 
            'data' => $this->data, 
            'read_at' => $this->read_at, 
            'created_at' => $this->created_at,
            'formatted_created_at' => $this->created_at->diffForHumans(),
        ];
    }
}