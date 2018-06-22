<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class games extends model
{
    public function companies(){
        return $this->belongsTo(Company::class);
    }
    protected $fillable = [
        'naam', 'releasedate', 'company', 'price'
    ];

}