<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    //

    protected $fillable = [

        'make',
        'model',
        'year',
        'body_type',
        'mileage',
        'fuel',
        'engine',
        'transmission',
        'horse_power',
        'doors',
        'seats',
        'interior_color',
        'exterior_color',


        'description',
        'user_id',
        'price',
        'specification'


    ];

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }
}
