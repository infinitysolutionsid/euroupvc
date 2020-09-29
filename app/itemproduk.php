<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemproduk extends Model
{
    protected $table = 'itemproduks';
    protected $fillable = [
        'kategori_id', 'katalog_id', 'nama_item', 'description', 'fileimg',
    ];
}
