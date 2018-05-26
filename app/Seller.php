<?php

namespace App;

use App\Product;

class Seller extends User
{
    //
    public function products()
    {
        # code...
        return $this->hasMany(Product::class);
    }
}
