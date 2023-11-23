<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RekamMedisResource extends JsonResource
{
    public $prosedur;
    public $message;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function __construct($prosedur, $message, $resource) 
    {
        $this->prosedur = $prosedur;
        $this->message = $message;
        $this->resource = $resource;
    }
    public function toArray(Request $request): array
    {
        return [
            'prosedur' => $this->prosedur,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
