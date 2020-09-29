<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{
    protected $table = 'quotations';
    protected $fillable = [
        'request_name',
        'request_company',
        'email',
        'phone',
        'messages',
    ];
}
