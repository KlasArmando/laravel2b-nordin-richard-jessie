<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Console extends model
{
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];
}