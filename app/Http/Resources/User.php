<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      $data = [
        'id' => $this->id,
        'name' => $this->name,
        'username' => $this->username,
        'quote' => $this->quote,
        'emoji' => $this->emoji,
        'email' => $this->email
      ];

      return $data;
    }
}
