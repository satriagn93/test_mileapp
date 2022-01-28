<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\MissingValue;

class CustomerAttributeResource extends JsonResource
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
            'id' => $this->id,
            'nama_sales' => $this->nama_sales,
            'top' => $this->top,
            'jenis_pelanggan' => $this->jenis_pelanggan,
            'transaction' => new TransactionResource($transaction),
        ];
    }
}
