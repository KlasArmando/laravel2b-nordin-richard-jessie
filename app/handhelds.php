<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class handhelds extends model
{
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];

}