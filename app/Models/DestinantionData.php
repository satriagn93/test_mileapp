<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinantionData extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $fillable = ['transaction_id'];
    protected $table = 'destination_datas';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
