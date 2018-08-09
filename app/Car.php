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
        'photo_id',
        'photo_all',
        'description',
        'user_id',
        'price',
        'specification'


    ];

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
