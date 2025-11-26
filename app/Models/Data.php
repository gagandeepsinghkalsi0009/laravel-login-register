<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable =[
         'name', 
         'mobile', 
         'address', 
         'user_id'];
}
     function user(){ 
    return $this->belongsTO(User::class ,'user_id'); }