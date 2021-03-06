<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handheld extends Model
{
    protected $fillable = [
        'name', 'releasedate', 'price', 'name_id'
    ];

    public function user(){
        return $this->belongsTo('app\User');
    }
}
