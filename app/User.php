<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    } // end of posts method

    public function getNameAttribute($value)
    {
        return ucwords($value);
    } // end of get name attribute
}
