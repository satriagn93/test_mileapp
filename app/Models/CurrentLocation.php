<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentLocation extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id','name'];
    protected $table = 'current_locations';

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
