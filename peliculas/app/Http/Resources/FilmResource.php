<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            // La izquierda se puede cambiar el nombre
            'id' => $this->id,
            'title' => $this->title,
            'duration' => $this->duration,
            'age_rate' => $this->age_rate,
        ];
    }
}
