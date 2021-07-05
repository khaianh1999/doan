<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'full_name'          => $this->full_name,
            'email'              => $this->email,
            'password'           => $this->password,
            'phone'              => $this->phone,
            'status'              => $this->status,
            'join_date'           =>$this->join_date,
            'last_login'              => $this->last_login,
            'ip_address'              => $this->ip_address,
            'created_at'  => (string) $this->created_at,
            'updated_at'  => (string) $this->updated_at,
        ];
    }
}
