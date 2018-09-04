<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carmake extends Model
{
    //
    protected $fillable=['name'];

    public function carmodels(){
        return $this->hasMany('App\Carmodel','carmake_name');
    }
}
