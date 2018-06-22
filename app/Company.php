<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function handhelds(){
        return $this->hasMany(Handhelds::class);
    }
    public function games(){
        return $this->hasMany(games::class);
    }
    public function consoles(){
        return $this->hasMany(consoles::class);
    }
    protected $fillable = [
        'naam'
    ];
}
