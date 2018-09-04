<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Car extends Model
{
    //
    use Sluggable;

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
        'specification',
        'view_count'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['make','model','year','fuel','transmission','mileage']
            ]
        ];
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }


    public function scopeMakes($query, $make) {
            if (!empty($make)) return $query->where('make', $make);
        }

    public function scopeModels($query, $model) {
        if (!empty($model)) return $query->where('model', $model);
    }

    public function scopeYears ($query, $min_year, $max_year) {
        if ($min_year > $max_year) {
            $min_year ^= $max_year ^= $min_year ^= $max_year;
        }
        return $query->whereBetween('year', [$min_year, $max_year]);
    }

    public function scopeMileages ($query, $min_mileage, $max_mileage) {
        if ($min_mileage > $max_mileage) {
            $min_mileage ^= $max_mileage ^= $min_mileage ^= $max_mileage;
        }
        return $query->whereBetween('mileage', [$min_mileage, $max_mileage]);
    }

    public function scopeBodies($query, $body) {
        if (!empty($body)) return $query->where('body_type', $body);
    }

    public function scopeFuels($query, $fuel) {
        if (!empty($fuel)) return $query->where('fuel', $fuel);
    }

    public function scopePrices ($query, $min_price, $max_price) {
        if ($min_price > $max_price) {
            $min_price ^= $max_price ^= $min_price ^= $max_price;
        }
        return $query->whereBetween('price', [$min_price, $max_price]);
    }

    public function scopeEngines ($query, $min_value, $max_value) {
        if ($min_value > $max_value) {
            $min_value ^= $max_value ^= $min_value ^= $max_value;
        }
        return $query->whereBetween('engine', [$min_value, $max_value]);
    }

    public function scopePowers ($query, $min_value, $max_value) {
        if ($min_value > $max_value) {
            $min_value ^= $max_value ^= $min_value ^= $max_value;
        }
        return $query->whereBetween('horse_power', [$min_value, $max_value]);
    }




}
