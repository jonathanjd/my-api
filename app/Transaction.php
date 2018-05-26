<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id'
    ];

    public function buyer()
    {
        # code...
        return $this->belongsTo(Buyer::class);
    }

    public function product()
    {
        # code...
        return $this->belongsTo(Product::class);
    }
}
