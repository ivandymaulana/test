<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'name', 'image', 'price','user_id','flower_id','quantity',
    ];
}
