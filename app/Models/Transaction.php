<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $keyType = 'string';

    public function customerattributes()
    {
        return $this->hasMany(CustomerAttribute::class, 'transaction_id');
    }

    public function connotes()
    {
        return $this->hasMany(Connote::class, 'transaction_id');
    }

    public function origin_datas()
    {
        return $this->hasMany(OriginData::class, 'transaction_id');
    }

    public function destination_datas()
    {
        return $this->hasMany(DestinantionData::class, 'transaction_id');
    }

    public function koli_datas()
    {
        return $this->hasMany(KoliData::class, 'transaction_id');
    }

    public function custom_fields()
    {
        return $this->hasMany(CustomField::class, 'transaction_id');
    }

    public function current_locations()
    {
        return $this->hasMany(CurrentLocation::class, 'transaction_id');
    }
}
