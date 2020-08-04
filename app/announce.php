<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class announce extends Model
{
    protected $table = 'announces';
    protected $fillable = [
        'title', 'messages', 'status',
    ];
}
