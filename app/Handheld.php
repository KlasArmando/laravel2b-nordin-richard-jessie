<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handheld extends Model
{
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];
}
