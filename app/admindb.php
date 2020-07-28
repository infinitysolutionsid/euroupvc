<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admindb extends Model
{
    protected $table = 'admindbs';
    protected $fillable = [
        'username',
        'password',
        'unpassword',
        'name',
        'role',
        'birthdate',
        'status',
    ];
}
