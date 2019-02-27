<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'lambo_photos';
    protected $fillable = ['path'];

    //
    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
