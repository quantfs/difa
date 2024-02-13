<?php

namespace App\Http\Resources\Motor;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DefectsResource extends JsonResource
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
            'detail_id' => $this->detail_id,
            'code' => $this->code,
            'defect' => $this->defect,
            'description' => $this->description,
            'picture' => $this->picture,
            'reason' => $this->reason,
            'note' => $this->note,
        ];
    }
}
