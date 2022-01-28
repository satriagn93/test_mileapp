<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connote extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $fillable = ['transaction_id','customer_name'];
    protected $table = 'connotes';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    public function koli_datas()
    {
        return $this->hasMany(KoliData::class, 'connote_id');
    }
}
