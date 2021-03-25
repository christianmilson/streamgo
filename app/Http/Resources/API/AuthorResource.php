<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class AuthorResource
 * @package App\Http\Resources\API
 */
class AuthorResource extends JsonResource
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
            'author_id'    => $this->author_id,
            'first_name'    => $this->first_name,
            'last_name'     => $this->last_name,
        ];
    }
}
