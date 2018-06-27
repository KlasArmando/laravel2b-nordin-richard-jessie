<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends model
{
    protected $fillable = [
        'naam', 'releasedate', 'price', 'name_id'
    ];

    public function user(){
        return $this->belongsTo('app\User');
    }
}