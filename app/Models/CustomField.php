<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomField extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id','catatan_tambahan'];
    protected $table = 'custom_fields';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
