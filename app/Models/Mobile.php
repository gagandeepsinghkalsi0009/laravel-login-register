<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $fillable=[
        'name',
        'city',
        'mobile_number',
    ];
    function telephone(){
        return $this->hasOne(Telephone::class,'mobile_id');
    }
}
