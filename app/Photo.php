<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['name'];




    public function getNameAttribute($name){

        return '/images/'.$name;
    }

}
