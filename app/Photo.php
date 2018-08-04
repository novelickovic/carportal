<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    //
    protected $fillable = ['name', 'created_by'];


    public function owner(){

        return $this->belongsTo('App\User', 'created_by');
    }

    public function getNameAttribute($name){

        return '/images/'.$name;
    }

}
