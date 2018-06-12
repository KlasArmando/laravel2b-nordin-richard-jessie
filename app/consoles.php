<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consoles extends model
{
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];
    protected $table = 'consoles';
}