<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookRoom extends Model
{
    //
    protected $fillable = [
        'pic_up_date' , 'return_date' , 'room_number','mobile_number' ,
    ];
}
