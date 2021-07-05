<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResource extends JsonResource
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
            'id'                   => $this->id,
            'tablets_id'          => $this->tablets_id,
            'phones_id'              => $this->phones_id,
            'laptops_id'           => $this->laptops_id,
            'headphones_id'              => $this->headphones_id,
            'customer_id'              => $this->customer_id,
            'price'           => $this->price,
            'number_of_product'              => $this->number_of_product,
            'description'              => $this->description,
            'status'              => $this->status,
            'join_date'              => $this->join_date,

            'created_at'  => (string) $this->created_at,
            'updated_at'  => (string) $this->updated_at,
        ];
    }
}
