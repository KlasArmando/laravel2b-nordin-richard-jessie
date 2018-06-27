<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function game(){
        return $this->hasMany('app\Game');
    }

    public function company()
    {
        return $this->hasMany('app\Company');
    }

    public function console()
    {
        return $this->hasMany('app\Console');
    }

    public function handheld()
    {
        return $this->hasMany('app\Handheld');
    }
}
