<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Employee extends Model
{
     use Notifiable;
    protected $guard = 'admin';

    protected $fillable = ['firstname','lastname', 'description', 'phone'];

     protected $hidden = [
        'password', 'remember_token',
    ];
}
