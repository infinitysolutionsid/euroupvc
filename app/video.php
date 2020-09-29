<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table = 'videos';
    protected $fillable = [
        'link_title', 'link',
    ];
}
