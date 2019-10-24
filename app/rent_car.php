<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rent_car extends Model
{
    //
    protected $fillable = [
        'pic_up_location' , 'pic_up_date', 'return_date', 'car_type','mobile_number' ,
    ];
}
