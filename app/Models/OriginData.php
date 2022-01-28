<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OriginData extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $fillable = ['transaction_id'];
    protected $table = 'origin_datas';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
