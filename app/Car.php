<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
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
            'year',
            'amount',
            'description'
        ];

    /*
     * A car listing card  is composed of many photos
     */
    public function photos()
    {
        return $this->hasmany('App\Photo');
    }
}
