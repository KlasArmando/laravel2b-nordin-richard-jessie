<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consoles extends model
{
    public function companies(){
        return $this->belongsTo(Company::class);
    }
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];
    protected $table = 'consoles';
}