<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'historytransactions';
    protected $fillable = [
        'name', 'image', 'price','quantity','user_id','flower_id','transactions_id',
    ];
}
