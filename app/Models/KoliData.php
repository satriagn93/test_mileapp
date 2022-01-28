<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoliData extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $fillable = ['connote_id'];
    protected $table = 'koli_datas';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
