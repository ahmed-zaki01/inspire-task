<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;

    // fillable attributes
    protected $fillable = ['username', 'email', 'password'];

    // hidden attributes
    protected $hidden = ['password'];

    public function getUsernameAttribute($value)
    {
        return ucwords($value);
    } // end of get uppercase username
}
