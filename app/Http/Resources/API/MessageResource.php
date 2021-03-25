<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'message_id'    => $this->message_id,
            'message'       => $this->message,
            'author'        => new AuthorResource($this->author),
            'created_at'    => $this->created_at,
        ];
    }
}
