<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colorproduct extends Model
{
    protected $table = 'colorproducts';
    protected $fillable = [
        'color_name',
        'file_color',
        'created_by',
        'updated_by',
    ];
}
