<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Photo extends Model
{
    //
    protected $fillable = ['name', 'created_by', 'car_id'];


    public function owner(){

        return $this->belongsTo('App\User', 'created_by');
    }

    public function getNameAttribute($name){

        return '/images/'.$name;
    }

    public function cars() {
        return $this->belongsToMany('App\Car');
    }

}
