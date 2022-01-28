<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\MissingValue;

class OriginDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $transaction = $this->whenLoaded('transaction');

        return [
            'customer_name' => $this->customer_name,
            'customer_address' => $this->customer_address,
            'customer_email' => $this->customer_email,
            'customer_phone' => $this->customer_phone,
            'customer_address_detail' => $this->customer_address_detail,
            'customer_zip_code' => $this->customer_zip_code,
            'zone_code' => $this->zone_code,
            'organization_id' => $this->organization_id,
            'location_id' => $this->location_id,
            'transaction' => new TransactionResource($transaction),
        ];
    }
}
