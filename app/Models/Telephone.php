<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    protected $fillabele =[
        'mobile_id',
        'country_code',
    ];

    function mobile(){
        return $this->belongsTo(Mobile::class,'mobile_id');
    }
}
