<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallerydb extends Model
{
    protected $table = 'gallerydbs';
    protected $fillable = [
        'product_id',
        'judul_foto',
        'img',
    ];
}
