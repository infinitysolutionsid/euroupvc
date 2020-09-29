<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'whatsapp1',
        'whatsapp2',
        'instagram',
        'facebook', 'address',
    ];
}
