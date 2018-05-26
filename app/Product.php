<?php

namespace App;

use App\Seller;
use App\Category;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    const PRODUCTO_DISPONIBLE = 'disponible';
    const PRODUCTO_NO_DISPONIBLE = 'no disponible';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    public function estaDisponible()
    {
        # code...
        return $this->status == Product::PRODUCTO_DISPONIBLE;
    }

    public function seller()
    {
        # code...
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        # code...
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        # code...
        return $this->belongsToMany(Category::class);
    }

}
