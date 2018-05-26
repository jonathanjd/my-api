<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillbale = [
        'name',
        'description'
    ];

    public function products()
    {
        # code...
        return $this->belongsToMany(Product::class);
    }
}
