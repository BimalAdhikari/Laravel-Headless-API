<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EtappeResource extends JsonResource
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
            'stage_number' => $this->stage_number,
            'stage_date' => $this->stage_date,
            'stage_type' => $this->stage_type,
            'start_city' => $this->start_city,
            'finish_city' => $this->finish_city,
            'distance_km' => $this->distance_km,
            'elevation_d_plus' => $this->elevation_d_plus,
            'description' => $this->description,
        ];
    }
}
