<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPage extends Model
{
   protected $fillable = [
        'url_key',
        'meta_title',
        'meta_description',
        'content',
        'status',
    ];

}
