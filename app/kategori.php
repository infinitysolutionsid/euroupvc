<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
        'product_id', 'nama_kategori', 'description',
    ];
}
