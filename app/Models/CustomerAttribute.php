<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id','nama_sales','top','jenis_pelanggan'];
    protected $table = 'customer_attributes';
    
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
