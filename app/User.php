<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_type', 
        'name', 
        'contact', 
        'location', 
        'email', 
        'password',
        'image_path', 
        'NIN',
        'car_id', 
        'NOK_name', 
        'NOK_contact',
        'NOK_email', 
        'NOK_NIN', 
        'NOK_location'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
