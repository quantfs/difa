<?php

namespace App\Http\Resources\InputData;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //$url = isset($this->image) ? $this->image->url : null;

        return [
            'id' => $this->id,
            'op' => $this->op,
            'city' => $this->city,
            'company' => $this->company,
            'field' => $this->field,
            'cluster' => $this->cluster,
            'well' => $this->well,
            'installation_date_at' => $this->installation_date_at,
            'start_date_at' => $this->start_date_at,
            'stop_date_at' => $this->stop_date_at,
            'dismantling_date_at' => $this->dismantling_date_at,
            'operating_time' => $this->operating_time,
            'stop_reason' => $this->stop_reason,
            'mode' => $this->mode,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
