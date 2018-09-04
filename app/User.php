<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'photo_id', 'is_active', 'address', 'city', 'zip', 'state', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role(){

        return $this->belongsTo('\App\Role');
    }

    public function photo(){

        return $this->belongsTo('\App\Photo');
    }

    public function isAdmin(){

        if ($this->role->name == "Administrator") {

            return true;
        }
    }
    public function cars(){
        return $this->hasMany('App\Car');
    }

    public function isAuthor(){

        if ($this->role->name == 'Author') {

            return true;
        }
    }

    public function isUser(){
        if ($this->role->name == 'User') {
            return true;
        }
    }

    public function setPasswordAttribute($password){
        if (!empty($password)){
            $this->attributes['password'] = bcrypt($password);
        }
    }

}
