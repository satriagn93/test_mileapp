<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customer_name' => $this->customer_name,
            'customer_code' => $this->customer_code,
            'transaction_amount' => $this->transaction_amount,
            'transaction_discount' => $this->transaction_discount,
            'transaction_additional_field' => $this->transaction_additional_field,
            'transaction_payment_type' => $this->transaction_payment_type,
            'transaction_state' => $this->transaction_state,
            'transaction_code' => $this->transaction_code,
            'transaction_order' => $this->transaction_order,
            'location_id' => $this->location_id,
            'organization_id' => $this->organization_id,
            'transaction_payment_type_name' => $this->transaction_payment_type_name,
            'transaction_cash_amount' => $this->transaction_cash_amount,
            'transaction_cash_change' => $this->transaction_cash_change,
            'customerattributes' => CustomerAttributeResource::collection($this->whenLoaded('customerattributes')),
            'connotes' => ConnoteResource::collection($this->whenLoaded('connotes')),
            'origin_datas' => OriginDataResource::collection($this->whenLoaded('origin_datas')),
            'destination_datas' => DestinantionDataResource::collection($this->whenLoaded('destination_datas')),
            'koli_datas' => KoliDataResource::collection($this->whenLoaded('koli_datas')),
            'custom_fields' => CustomFieldResource::collection($this->whenLoaded('custom_fields')),
            'current_locations' => CurrentLocationResource::collection($this->whenLoaded('current_locations')),
        ];
    }
}
