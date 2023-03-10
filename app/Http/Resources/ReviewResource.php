<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'id'            => $this->id,
            'product_id'    => $this->product_id,
            'customer'      => $this->customer_name,
            'body'          => $this->review_product,
            'star'          => $this->star,
        ];
    }
}
