<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handhelds extends Model
{
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];

    public function companies(){
        return $this->belongsTo(Company::class);
    }
}
