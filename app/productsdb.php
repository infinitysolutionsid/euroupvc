<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productsdb extends Model
{
    protected $table = 'productsdbs';
    protected $fillable = [
        'product_name',
        'description',
    ];
}
