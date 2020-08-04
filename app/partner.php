<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    protected $table = 'partners';
    protected $fillable = [
        'image', 'title',
    ];
}
