<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MarketResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'location'=>$this->location,
            'open_days'=>$this->open_days,
            'coordinates'=>$this->coordinates,
            'image'=>$this->image,
            'description'=>$this->description,
        ];
    }
}
