<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhonesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'                   =>$this->id,
            'name'          => $this->name,
            'code'              => $this->code,
            'origin'           => $this->origin,
            'price'              => $this->price,
            'status'              => $this->status,
            'picture'           =>$this->picture,
            'description'              => $this->description,
            'configuration'              => $this->configuration,
            'created_at'  => (string) $this->created_at,
            'updated_at'  => (string) $this->updated_at,
        ];
    }
}
