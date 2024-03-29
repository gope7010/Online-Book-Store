<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Book extends Model
{
     use Notifiable;
   //protected $guard = 'admin';

    protected $fillable = ['name','category', 'author', 'price'];

     protected $hidden = [
        'password', 'remember_token',
    ];
}
