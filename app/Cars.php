<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';
    protected $fillable =
        [

            'car_name',
            'fuel',
            'transmission',
            'wheel_drive',
            'wheel_position',
            'make',
            'model',
            'year'
        ];
}
