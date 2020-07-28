<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogdb extends Model
{
    protected $table = 'blogdbs';
    protected $fillable = [
        'judul',
        'isi',
        'coverimg',
        'kategori_produk',
    ];
}
