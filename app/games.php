<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class games extends model
{
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];

}