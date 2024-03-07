<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvatarResource extends JsonResource
{

    public $status;
    public $message;
    public $resource;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function __construct($status, $messages, $resource)
    {
        parent:: __construct($resource);
        $this->status = $status;
        $this->message = $messages;
    }

    public function toArray($request): array
    {
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource 
        ];
    }
}
