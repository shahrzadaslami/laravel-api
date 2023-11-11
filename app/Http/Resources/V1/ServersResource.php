<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
        'id' => $this->id,
        'title' => $this->title,
        'description' => $this->description,
        'sshPort' => $this->sshPort,
        'userName'=>$this->userName,
        'state'=>$this->state,
        'ip'=>$this->ip,
       ];
    }
}
